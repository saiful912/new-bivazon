<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantPaymentRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\PaymentRequest;
use App\Models\User;
use App\Rules\OldPassword;
use App\Traits\ImageUploadAble;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class DashboardController extends Controller
{
    use ImageUploadAble;

    public function index()
    {
        $total_order = Order::where('merchant_id', auth()->user()->id)->count('id');
        $today_order = Order::where('merchant_id', auth()->user()->id)->whereDate('created_at', Carbon::today())->count('id');
        $last_month = Order::where('merchant_id', auth()->user()->id)->whereMonth('created_at', \Carbon\Carbon::now()->subMonth()->format('m'))->count('id');
        $total_sale = Order::where('merchant_id', auth()->user()->id)->where('status', 'completed')->count('id');
        $orders = Order::where('merchant_id', auth()->user()->id)->orderBy('id', 'desc')->take(10)->get();
        return view('merchant.dashboard.index', compact('orders', 'total_order', 'total_sale', 'today_order', 'last_month'));
    }

    public function setting()
    {
        return view('merchant.dashboard.setting', [
            'categories' => Category::select(['id', 'name'])->where('category_id', '!=', null)->get(),

        ]);
    }

    public function merchantUpdate(Request $request)
    {
        $this->validate($request, [
            'shop_name' => 'required',
            'full_name' => 'required|min:3|max:18',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(?:\+?88)?01[13-9]\d{8}$/',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg',
            'shop_banner' => 'sometimes|image|mimes:jpeg,png,jpg',
        ]);
        DB::beginTransaction();
        try {
            $user = User::with('merchant')->find(auth()->user()->id);
            $data = [
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
            ];
            if ($request->hasFile('image')) {
                $file_name = $this->upload($request->file('image'), 'shop/profile');
                $data['image'] = $file_name;
            }
            $user->update($data);
            if ($request->hasFile('shop_banner')) {
                $file_names = $this->upload($request->file('shop_banner'), 'shop/banner_image');
            }
            $user->merchant()->update([
                'shop_name' => $request->input('shop_name'),
                'shop_banner'=>$file_names,
            ]);
            DB::commit();
            notify()->success(' Merchant update successfully ', 'success');
            return redirect()->back();
        } catch (Throwable $exception) {
            DB::rollBack();
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }

    }

    public function updatePassword(Request $request)
    {
        $validateData = $this->validate($request, [
            'password' => 'required|min:8|alpha_num|confirmed',
            'old_password' => ['required', new OldPassword],
        ]);

        $user = User::with('merchant')->find(auth()->user()->id);

        $user->update(['password' => Hash::make($validateData['password'])]);
        notify()->success('Password changed successfully', 'success');
        return redirect()->back();

    }

    public function order()
    {
        $orders = Order::where('merchant_id', auth()->user()->id)->orderBy('id', 'desc')->paginate(20);
        return view('merchant.dashboard.orders', compact('orders'));
    }

    public function payment()
    {
        return view('merchant.dashboard.payments_history');
    }

    public function paymentRequest()
    {
        return view('merchant.dashboard.payments_request');
    }

    public function Addpayment(MerchantPaymentRequest $request)
    {
        try {
            $paymentRequest = new PaymentRequest();
            $paymentRequest->invoice_no = $request->invoice_no;
            $paymentRequest->amount = $request->amount;
            $paymentRequest->message = $request->message;
            $paymentRequest->save();
            notify()->success('A Payment Request has created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function product()
    {
        return view('merchant.dashboard.products');
    }

    public function edit()
    {
        return view('merchant.dashboard.product_edit');
    }

    public function return()
    {
        return view('merchant.dashboard.return_product');
    }
}
