<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Enums\UserType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password'),];

        try {
            if (auth()->attempt($credentials)) {

                if (auth()->user()->type == UserType::ADMIN()) {
                    return redirect()->intended(route('dashboard'));
                }
            }

            return redirect()->back();
        } catch (\Throwable $throwable) {
            return redirect()->back();
        }
    }
    public function logout()
    {
        auth()->logout();
        session()->invalidate();

        return redirect()->route('admin.login');
    }

}
