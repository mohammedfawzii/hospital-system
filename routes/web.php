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
