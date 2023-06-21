<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class VendorController extends Controller
{
    // vendor login 
    public function vendor_login(){
        return view('vendor.vendor_login');
    }

    // vendor dashboard
    public function vendor_dashboard(){
        return view('vendor.index');
    }
    
    // vendor profile
    public function vendor_profile(){
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile', compact('vendorData'));
    }

    // vendor profile update
    public function vendor_update(Request $request){
        $id = Auth::user()->id;
        $vendorData = User::find($id);

        $vendorData->name = $request->name;
        $vendorData->email = $request->email;
        
        // photo work
        if(file_exists($image = $request->file('photo'))){   // image from request 
            $customImageName = uniqid().'.'.$image->getClientOriginalExtension(); //custom image name 
            
            @unlink(public_path('backend/vendor/uploads/'.$vendorData->photo));
            $image->move(public_path('backend/vendor/uploads/'), $customImageName);
            
        }
        else{
            $customImageName = $vendorData->photo;
        }
        $vendorData->photo = $customImageName;


        $vendorData->phone = $request->phone;
        $vendorData->address = $request->address;
        $vendorData->update();

        $notification = array(
            'message' => "Profile updated Successfully",
            'alert-type' => "success"
        );
        return redirect()->back()->with($notification);


    }

      // vendor change password 
      public function vendor_changes(){
        return view('vendor.vendor_changes');
    }

    // vendor change password 
    public function vendor_changes_update(Request $request){
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

    //vendor logout
    public function vendor_logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/vendor/login');
    }
}
