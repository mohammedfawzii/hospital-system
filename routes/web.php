<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\WebController;
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
Route::get("/",[WebController::class,"index"])->name("home");




// -----------------dash routes--------------------------------
Route::group(['prefix'=>'dashboard/' ] ,function(){
    Route::get('department',[DashboardController::class,"Department"])->name('department');
    Route::get('clinic',[DashboardController::class,"clinic"])->name('clinic');
    Route::get('patient',[DashboardController::class,"patient"])->name('patient');
    Route::get('message',[DashboardController::class,"message"])->name('message');
    Route::get('staff',[DashboardController::class,"staff"])->name('staff');
    Route::get('account',[DashboardController::class,"account"])->name('account');
    Route::get('pharmacy',[DashboardController::class,"pharmacy"])->name('pharmacy');
});


// -----------------pharmacy routes--------------------------------
Route::group(['prefix'=>'dashboard/pharmacy' ] ,function(){
    Route::get('/pharmaceutical',[PharmacyController::class,'pharmaceutical'])->name('pharmaceutical');
    Route::get('/invoice',[PharmacyController::class,'invoice'])->name('invoice');
    Route::get('/total-sales',[PharmacyController::class,'totalSales'])->name('total-sales');
    Route::get('/shortfalls',[PharmacyController::class,'shortfalls'])->name('shortfalls');
    Route::get('/expired',[PharmacyController::class,'expired'])->name('expired');
    Route::get('/note',[PharmacyController::class,'note'])->name('note');
    Route::get('/pharmaceutical',[PharmacyController::class,'pharmaceutical'])->name('pharmaceutical');
});
