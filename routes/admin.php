<?php
use App\Http\Controllers\Admin\AdminAuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('login',[AdminAuthenticationController::class,'login'])->name('login');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware(('admin'));
});


