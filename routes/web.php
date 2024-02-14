<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [postController::class, 'dashboardUser']);
Route::get('/news/{post:slug}', [DashboardPostController::class, 'news']);

Auth::routes();

//user
Route::get('/main', function(){
    return view('layouts.main');
});


// admin
Route::get('/dashboardAdmin', function ( ){
    return view('layouts.sidebarAdmin');
});

Route::get('/dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');

// show use slug
Route::get('/dashboard/post/{post:slug}',[DashboardPostController::class, 'show']);
Route::get('/dashboard/post/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');