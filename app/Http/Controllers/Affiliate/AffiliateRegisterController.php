<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use Illuminate\Http\Request;
use App\Enums\UserType;
use App\Models\User;
use App\Traits\ImageUploadAble;
use DB;

class AffiliateRegisterController extends Controller
{
    use ImageUploadAble;
    public function create()
    {
        return view('affiliate.dashboard.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'full_name' => 'required|min:3|max:18',
            'email' => 'required|unique:users,email',
            'phone' => 'required|regex:/^(?:\+?88)?01[13-9]\d{8}$/|unique:users,phone',
            'ref_url' => 'required|unique:affiliates,ref_url',
            'password' => 'required|min:8|alpha_num|confirmed',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg',
        ]);
        DB::beginTransaction();
        try {
            $affiliate = Affiliate::create([
                'ref_url' => $request->input('ref_url'),
            ]);
            $file_name = $this->upload($request->file('image'), 'shop/profile');
            User::create([
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'affiliate_id' => $affiliate->id,
                'password' => bcrypt($request->input('password')),
                'image' => $file_name,
                'type' => UserType::AFFILIATE(),
            ]);
            DB::commit();

            return redirect()->route('home');
        } catch (Throwable $exception) {
            DB::rollBack();

            return redirect()->back();
        }
    }

    public function login()
    {
        return view('affiliate.dashboard.login');
    }

    public function process_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (auth()->attempt($credentials)) {
            return redirect()->route('affiliate.dashboard');
        }
        return  redirect()->back();
    }
}
