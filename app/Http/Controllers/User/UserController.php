<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
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
    // register user
    public function user_register(){
        return view('user.user_register');
    }
    // user add 
    public function user_add(Request $request){
        $user = new User();

        $user->name = $request->uname;
        $user->username = $request->username;
        $user->email = $request->uemail;
        dd($user);
        $fpass = $request->password;
        $cpass = $request->cpassword;

        if(!empty($fpass && $cpass)){
            if($fpass != $cpass){
                return back()->with('error', "Password Doesn't Match");
            }
            else{
                $user->password = $fpass;
                return back()->with('status', "Account Created Successfully");
            }
        }

        $user->save();

        return back();
    }
    // user dashboard
    public function user_dashboard(Request $request){
        $id = Auth::user()->id;
        $userData = User::find($id);

        return view('user.user_dashboard', compact('userData'));
    }
    // user dashboard update
    public function user_update(Request $request){
        $id = Auth::user()->id;
        $userData = User::find($id);
        $userData->name = $request->uname;
        $userData->email  = $request->uemail;
        $userData->phone  = $request->uphone;
        $userData->address  = $request->uaddress;
        $userData->update();

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;
        
        if(!empty($old_password)){ //old pass field not empty
            if(!Hash::check($old_password, Auth::user()->password)){
                return back()->with('error', "Old Password Doesn't Match");
            }
            else{
                if(!empty($new_password) && !empty($confirm_password)){
                    if($new_password != $confirm_password){
                        return back()->with('error', "Confirm Password Doesn't Match");
                    }
                    else{
                        User::whereId(Auth::user()->id)->update([
                            'password' => Hash::make($request->new_password)
                        ]);
                        return back()->with('status', "Password updated successfully");
                    }
                }else{
                    return back()->with('error', "Please Input New & Confirm Password");
                }
            }

        }
        else{
            return back()->with('error', "Please Input Old Password");
        }

        return redirect()->back();
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
