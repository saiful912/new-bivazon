<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Merchant;
use App\Models\User;
use App\Traits\ImageUploadAble;
use DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Throwable;

class MerchantRegisterController extends Controller
{
    use ImageUploadAble;

    public function showRegisterForm(): View
    {
        return view('backend.shop.index', [
            'categories' => Category::where('category_id', '=', null)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'type' => 'required',
            'shop_name' => 'required|unique:merchants,shop_name',
            'full_name' => 'required|min:3|max:18',
            'phone' => 'required|regex:/^(?:\+?88)?01[13-9]\d{8}$/|unique:users,phone',
            'password' => 'required|min:8|alpha_num|confirmed',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg',
        ]);
        DB::beginTransaction();
        try {
            $merchant = Merchant::create([
                'shop_name' => $request->input('shop_name'),
                'shop_type' => $request->input('type'),
                'category_id' => $request->input('category_id'),
            ]);
            $file_name = $this->upload($request->file('image'), 'shop/profile');
            User::create([
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'merchant_id' => $merchant->id,
                'password' => bcrypt($request->input('password')),
                'image' => $file_name,
                'type' => UserType::MERCHANT(),
            ]);
            DB::commit();
//            session()->flash('success','You Have Successfully Registration. The admin will give you access very soon');
            return redirect(route('shop.register.message'));
        } catch (Throwable $exception) {
            DB::rollBack();
            session()->flash('errors','Something was wrong !! Please Try Again..');
            return back();
        }
    }

    public function successMessage()
    {
        return view('frontend.pages.successMessage');
    }
    public function showLoginForm()
    {
        return \view('backend.shop.login');
    }

    public function LoginMessage()
    {
        return view('frontend.pages.successMessage');
    }
    public function shopLogin(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|min:10',
            'password' => 'required',
        ]);
        $credentials = [
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
        ];

        if (auth()->attempt($credentials)) {
                return redirect()->route('merchant.dashboard');

        }
        notify()->error('Invalid credentials');
        return redirect()->back()->withInput();
    }


}
