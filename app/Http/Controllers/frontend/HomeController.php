<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Feedback;

use App\Models\Slider;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $users=User::orderBy('id','desc')->with('merchant')->get();
        $feedbacks=Feedback::where('status',1)->orderBy('id','desc')->get();
        $sliders = Slider::active()->orderBy('id', 'desc')->take(5)->get();
        return view('frontend.home', compact('sliders','feedbacks','users'));

    }
}
