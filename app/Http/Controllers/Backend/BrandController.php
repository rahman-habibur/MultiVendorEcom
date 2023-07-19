<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /*
     brand index
    */
    public function index()
    {
        $allBrand = Brand::latest()->get();
        return view('backend.brand.brand_all', compact('allBrand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.brand_add');
    }

    /**
     * brand add 
     */
    public function store(Request $request)
    {
        $brand = new Brand();

        $brand->brand_name = $request->brand_name;

        $brand->brand_slug = strtolower(str_replace(' ', '-', $request->brand_name));

        if(file_exists($image = $request->file('brand_image'))){  
            $customImageName = uniqid().'.'.$image->getClientOriginalExtension(); 
            $image->move(public_path('backend/admin/brand/uploads/'), $customImageName);
        }
        else{
            $customImageName = $brand->brand_image;
        }
        
        $brand->brand_image = $customImageName;

        $brand->save();

        $notification = array(
            'message' => "Brand Added Successfully",
            'alert-type' => "success"
        );
        return redirect()->route('brand.all')->with($notification);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
