<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\District;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $districts = District::orderBy('priority', 'asc')->get();
        $carts = Cart::with('product')->where('ip', '=', \request()->ip())->get();
        return view('frontend.checkout', compact('districts', 'carts'));
    }
}
