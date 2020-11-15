<?php

namespace App\Http\Middleware;

use App\Enums\UserType;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (\auth()->user()->type == UserType::ADMIN()) {
                return redirect()->intended(route('dashboard'));
            }
            if (\auth()->user()->type == UserType::MERCHANT()) {
                return redirect()->route('merchant.dashboard');
            }
            if (\auth()->user()->type == UserType::AFFILIATE()) {
                return redirect()->route('affiliate.dashboard');
            }
        }


        return $next($request);
    }
}
