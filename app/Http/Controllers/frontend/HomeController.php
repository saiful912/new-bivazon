<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;

use App\Models\Order;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $users = User::orderBy('id', 'desc')->where('status', 1)->with('merchant')->get();
        $feedbacks = Feedback::where('status', 1)->orderBy('id', 'desc')->get();
        $sliders = Slider::active()->orderBy('id', 'desc')->take(5)->get();
        return view('frontend.home', compact('sliders', 'feedbacks', 'users'));

    }


    public function track(Request $request)
    {

        $search = $request->track;
        $orders = Order::where('phone', '=', $search)->orderBy('id', 'desc')->get();
        return view('frontend.pages.search', compact('orders', 'search'));
    }

//    public function search(Request $request)
//    {

//    }
}
