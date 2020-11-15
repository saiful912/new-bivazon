<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Merchant;
use App\Models\Order;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;

class RetailsController extends Controller
{
    public function orders()
    {
        $retailOrders = Order::where('type', 'retail')->orderBy('id', 'desc')->get();
        $sellers=Merchant::where('shop_type','retail')->orderBy('id','desc')->get();
        return view('backend.dashboard.retail.orders',compact('retailOrders','sellers'));
    }

    public function category()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.dashboard.retail.categories',compact('categories'));
    }

    public function categoryEdit()
    {
        return view('backend.dashboard.retail.editCategory');
    }

    public function products()
    {
        $products = Product::with(['user.merchant'])->where('type','retail')->paginate(20);
        return view('backend.dashboard.retail.products',compact('products'));
    }

    public function edit()
    {
        return view('backend.dashboard.retail.edit_product');
    }

    public function merchantRequest()
    {
        $users = User::orderBy('id','desc')->with('merchant')->take(10)->get();
        return view('backend.dashboard.retail.merchant_request',compact('users'));
    }

    public function allMerchant()
    {
        $users = User::orderBy('id','asc')->with('merchant')->take(10)->get();
        return view('backend.dashboard.retail.all_merchant',compact('users'));
    }

    public function editMerchant()
    {
        return view('backend.dashboard.retail.edit_merchant');
    }

    public function paymentHistory()
    {
        $sellers=Merchant::where('shop_type','retail')->orderBy('id','desc')->get();
        $payments = Payment::with(['order'=>function($query){
            $query->where('type','retail')->get();}])
            ->orderBy('id','desc')->paginate(20);
//        $payments=Payment::orderBy('id','desc')->get();
        return view('backend.dashboard.retail.payment_history',compact('payments','sellers'));
    }
    public function addPayment(PaymentRequest  $request)
    {
        try {
            $payment = new Payment();
            $payment->order_id = $request->order_id;
            $payment->merchant_id = $request->merchant_id;
            $payment->payment_method = $request->payment_method;
            $payment->amount = $request->amount;
            $payment->number = $request->number;
            $payment->save();
            notify()->success('A Payment has created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }
    public function editPayment(PaymentRequest  $request,$id)
    {
        try {
            $payment = Payment::find($id);
            $payment->order_id = $request->order_id;
            $payment->merchant_id = $request->merchant_id;
            $payment->payment_method = $request->payment_method;
            $payment->amount = $request->amount;
            $payment->number = $request->number;
            $payment->save();
            notify()->success('Payment has Update successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function deletePayment($id)
    {
        try {
            $payment = Payment::find($id);
            if (!is_null($payment)) {
                $payment->delete();
            }
            notify()->success('Payment Delete ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }
    public function returns()
    {
        return view('backend.dashboard.retail.return_product');
    }
}
