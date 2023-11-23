<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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








// ------------------web routes----------------------------
Route::get("/", function () {
    return view("auth.login");
});

Route::resource('doctor', DoctorController::class);


// -----------------dash routes--------------------------------
// Route::group(['prefix'=>'dashboard/' ] ,function(){
//     Route::get('department',[DashboardController::class,"Department"])->name('department');
//     Route::get('clinic',[DashboardController::class,"clinic"])->name('clinic');
//     Route::get('patient',[DashboardController::class,"patient"])->name('patient');
//     Route::get('message',[DashboardController::class,"message"])->name('message');
//     Route::get('staff',[DashboardController::class,"staff"])->name('staff');
//     Route::get('account',[DashboardController::class,"account"])->name('account');
//     Route::get('pharmacy',[DashboardController::class,"pharmacy"])->name('pharmacy');
// });


// // -----------------pharmacy routes--------------------------------
// Route::group(['prefix'=>'dashboard/pharmacy' ] ,function(){
//     Route::get('/pharmaceutical',[PharmacyController::class,'pharmaceutical'])->name('pharmaceutical');
//     Route::get('/invoice',[PharmacyController::class,'invoice'])->name('invoice');
//     Route::get('/total-sales',[PharmacyController::class,'totalSales'])->name('total-sales');
//     Route::get('/shortfalls',[PharmacyController::class,'shortfalls'])->name('shortfalls');
//     Route::get('/expired',[PharmacyController::class,'expired'])->name('expired');
//     Route::get('/note',[PharmacyController::class,'note'])->name('note');
//     Route::get('/pharmaceutical',[PharmacyController::class,'pharmaceutical'])->name('pharmaceutical');
// });
// //-----------------auth route---------------------------
// Route::get("login",[AuthController::class,"login"])->name('login');
// Route::post("login",[AuthController::class,"post_login"])->name('login.post');
// Route::get("register",[AuthController::class,"register"])->name('register');
// Route::post("post_register",[AuthController::class,"post_register"])->name('register.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
