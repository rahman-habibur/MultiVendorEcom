<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\User\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// admin login no varify required 
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/login', 'admin_login')->name('admin.login');
});

// Admin After Login
Route::middleware(['auth', 'role:admin'])->group(function(){

    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'admin_logout')->name('admin.logout');

        // admin profile update 
        Route::get('/admin/profile', 'admin_profile')->name('admin.profile');
        Route::post('/admin/update', 'admin_update')->name('admin.update');

        // password update 
        Route::get('/admin/changes', 'admin_changes')->name('admin.changes');
        Route::post('/admin/changes/update', 'admin_changes_update')->name('admin.changes.update');
        
    });

});

// vendor login no varify required 
Route::controller(VendorController::class)->group(function(){
    Route::get('/vendor/login', 'vendor_login')->name('vendor.login');
});

// Vendor 
Route::middleware(['auth', 'role:vendor'])->group(function(){

    Route::controller(VendorController::class)->group(function(){
        Route::get('/vendor/dashboard', 'vendor_dashboard')->name('vendor.dashboard');
        Route::get('/vendor/logout', 'vendor_logout')->name('vendor.logout');

        // vendor profile update 
        Route::get('/vendor/profile', 'vendor_profile')->name('vendor.profile');
        Route::post('/vendor/update', 'vendor_update')->name('vendor.update');

        // password update 
        Route::get('/vendor/changes', 'vendor_changes')->name('vendor.changes');
        Route::post('/vendor/changes/update', 'vendor_changes_update')->name('vendor.changes.update');
        
    });

});


// User 
Route::middleware(['auth', 'role: user'])->group(function(){

    Route::controller(UserController::class)->group(function(){
        Route::get('/user/dashboard', 'user_dashboard')->name('user.dashboard');
        
    });

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
