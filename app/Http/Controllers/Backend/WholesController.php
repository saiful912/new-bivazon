<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Category;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ImageUploadAble;
use DB;

class WholesController extends Controller
{
    use ImageUploadAble;
    public function orders()
    {
        $sellers=Merchant::where('shop_type','wholesale')->orderBy('id','desc')->get();
        $wholesaleOrders = Order::where('type', 'wholesale')->orderBy('id', 'desc')->get();
        return view('backend.dashboard.wholesale.orders',compact('wholesaleOrders','sellers'));
    }

    public function category()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view('backend.dashboard.wholesale.categories',compact('categories'));
    }

    public function categoryEdit()
    {
        return view('backend.dashboard.wholesale.editCategory');
    }

    public function products()
    {
        $products = Product::with(['user.merchant'])->where('type','wholesale')->paginate(20);
        return view('backend.dashboard.wholesale.products',compact('products'));
    }

    public function edit()
    {
        return view('backend.dashboard.wholesale.edit_product');
    }

    public function merchantRequest()
    {
        $users = User::orderBy('id','desc')->with('merchant')->take(10)->get();
        return view('backend.dashboard.wholesale.merchant_request',compact('users'));
    }

    public function allMerchant()
    {
        $users = User::orderBy('id','asc')->with('merchant')->take(10)->get();
        return view('backend.dashboard.wholesale.all_merchant',compact('users'));
    }

    public function editMerchant($id)
    {
        $categories = Category::orderBy('name', 'desc')->where('category_id', null)->get();
        $user=User::find($id);
        return view('backend.dashboard.wholesale.edit_merchant',compact('user','categories'));
    }
//    update merchant status
    public function merchantStatusUpdate($id)
    {
        $user = User::find($id);
        if ($user->status) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        notify()->success('User Successfully Activate!!');
        return back();
    }
    public function merchantUpdate(Request $request,$id)
    {

        $this->validate($request, [
            'shop_name' => 'required',
            'shop_type' => 'required',
            'full_name' => 'required|min:3|max:18',
//            'password' => 'min:8|alpha_num|confirmed',
            'category_id' => 'required',
            'phone' => 'required|regex:/^(?:\+?88)?01[13-9]\d{8}$/',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg',
        ]);
        DB::beginTransaction();
        try {
            $user=User::with('merchant')->find($id);
            $data = [
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ];
            if ($request->hasFile('image')) {
                $file_name = $this->upload($request->file('image'), 'shop/profile');
                $data['image'] = $file_name;
            }
            $user->update($data);

            $merchant=[
                'category_id' => $request->input('category_id'),
                'shop_type' => $request->input('shop_type'),
                'shop_name' => $request->input('shop_name'),
                'commission'=>$request->input('commission'),
                'address'=>$request->input('address'),
            ];
            if ($request->hasFile('shop_banner')) {
                $image = $this->upload($request->file('shop_banner'), 'shop/banner_image');
                $merchant['shop_banner'] = $image;
            }
            $user->merchant->update($merchant);
            DB::commit();
            notify()->success(' Merchant update successfully ', 'success');
            return redirect()->back();
        } catch (Throwable $exception) {
            DB::rollBack();
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function paymentHistory()
    {
        $sellers=Merchant::where('shop_type','wholesale')->orderBy('id','desc')->get();
        $payments = Payment::with(['order'=>function($query){
            $query->where('type','wholesale')->get();}])
            ->orderBy('id','desc')->paginate(20);
        return view('backend.dashboard.wholesale.payment_history',compact('payments','sellers'));
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

    public function paymentHistoryView()
    {
        return view('backend.dashboard.wholesale.payment_history_view');
    }

    public function returns()
    {
        return view('backend.dashboard.wholesale.return_product');
    }
}
