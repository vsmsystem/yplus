<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route('/admin'));

        auth()->guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
