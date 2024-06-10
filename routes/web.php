<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;


//Home Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);

//Auth
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::prefix('/admin/')->middleware('auth')->group(function(){
   
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('header', HeaderController::class);
    Route::resource('product', ProductController::class);
    Route::resource('testimonial', TestimonialController::class);
});




