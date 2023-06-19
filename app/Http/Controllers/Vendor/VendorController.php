<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor_dashboard(){
        return view('vendor.vendor_dashboard');
    }
}
