<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

use App\Models\User;

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
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }
    
    // admin profile update
    public function admin_update(Request $request){
        $id = Auth::user()->id;
        $adminUpdate = User::find($id);
        
        $adminUpdate->name = strtoupper($request->name);
        $adminUpdate->email  = $request->email;
        
        // photo task 
        if(file_exists($image = $request->file('photo'))){   // image from request 
            $customImageName = uniqid().'.'.$image->getClientOriginalExtension(); //custom image name 
            
            @unlink(public_path('backend/admin/uploads/'.$adminUpdate->photo));
            $image->move(public_path('backend/admin/uploads/'), $customImageName);
            
        }
        else{
            $customImageName = $adminUpdate->photo;
        }
        
        
        $adminUpdate->photo = $customImageName;
        $adminUpdate->phone  = $request->phone;
        $adminUpdate->address  = $request->address;
        $adminUpdate->update();
        
        $notification = array(
            'message' => "Profile updated Successfully",
            'alert-type' => "success"
        );
        return redirect()->back()->with($notification);
    }
    
    // admin change password 
    public function admin_changes(){
        return view('admin.admin_changes');
    }

    // admin change password 
    public function admin_changes_update(Request $request){
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
