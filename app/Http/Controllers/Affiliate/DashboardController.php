<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
//    use AuthenticatesUsers;

//    public function __construct() {
//        $this->middleware('auth:affiliate');
//    }
    public function index()
    {
        return view('affiliate.dashboard.index');
    }


    public function setting()
    {
        return view('affiliate.dashboard.setting');
    }
//    public function order()
//    {
//        return view('affiliate.dashboard.orders');
//    }

    public function payment()
    {
        return view('affiliate.dashboard.payments_history');
    }

    public function paymentRequest()
    {
        return view('affiliate.dashboard.payments_request');
    }
//    public function product()
//    {
//        return view('affiliate.dashboard.products');
//    }
//
//    public function edit()
//    {
//        return view('affiliate.dashboard.product_edit');
//    }
//
//    public function return()
//    {
//        return view('affiliate.dashboard.return_product');
//    }
}
