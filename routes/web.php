<?php

use App\Http\Controllers\DashboardController;
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




// -----------------back routes--------------------------------

Route::get('dashboard',[DashboardController::class,"dash"])->name('dash');
Route::get('dashboard/department',[DashboardController::class,"Department"])->name('department');
Route::get('dashboard/clinic',[DashboardController::class,"clinic"])->name('clinic');
Route::get('dashboard/patient',[DashboardController::class,"patient"])->name('patient');
Route::get('dashboard/message',[DashboardController::class,"message"])->name('message');
Route::get('dashboard/staf',[DashboardController::class,"staf"])->name('staf');
Route::get('dashboard/account',[DashboardController::class,"account"])->name('account');
Route::get('dashboard/pharmacy',[DashboardController::class,"pharmacy"])->name('pharmacy');

