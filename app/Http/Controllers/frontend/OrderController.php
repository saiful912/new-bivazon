<?php

namespace App\Http\Controllers\Frontend;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function process(OrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $carts = Cart::with('product')->where('ip', '=', \request()->ip())->get();
            if($carts->count() === 0){
                notify()->warning('Please add some items first.');
                return redirect()->route('home');
            }
            $customer = Customer::create([
                'full_name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'password' => bcrypt($request->input('name')),
            ]);
            $orderData = [
                'ip' => $request->ip(),
                'invoice_no' => Order::invoiceNo(),
                'name' => $request->input('name'),
                'customer_id' => $customer->id,
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'district_id' => $request->input('district_id'),
                'courier_id' => $request->input('courier_id'),
                'payment_method' => $request->input('payment_method'),
                'note' => $request->input('note'),
                'advance_amount' => 0,
                'total_amount' => $carts->sum('sub_total') + 60
            ];

            $order = Order::create($orderData);

            foreach ($carts as $item) {
                $data = [
                    'order_id'=> $order->id,
                    'merchant_id' =>$item->product->user_id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'attribute' => $item->attribute ?? null,
                    'unit_price'=> $item->price,
                    'unit_discount'=> $item->unit_discount,
                    'line_total' => $item->sub_total,
                ];
                OrderItem::create($data);
            }
            $carts->each(function ($cart){
                $cart->delete();
            });
            DB::commit();
            notify()->success('Thank you for order');
            return redirect()->back();

        } catch (\Throwable $exception) {
            DB::rollBack();
            notify()->warning('Something went wrong please check again.');
            return redirect()->back();
        }
    }
}
