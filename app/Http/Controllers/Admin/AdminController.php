<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
   
    // admin login 
    public function admin_login(){
        return view('admin.admin_login');
    }

    // admin dashboard 
    public function admin_dashboard(){
        return view('admin.index');
    }
    
    // admin profile 
    public function admin_profile(){
        return view('admin.admin_profile');
    }


    //admin logout
    public function admin_logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
