<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    // home page 
    public function index(){
        return view('user.index');
    }
    // login page 
    public function user_login(){
        return view('user.user_login');
    }
    // user dashboard
    public function user_dashboard(){
        return view('user.user_dashboard');
    }
    // user logout 
    public function user_logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
}
