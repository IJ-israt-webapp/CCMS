<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ChildCareRegistrationController;

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


Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/child-list',[DashboardController::class, 'childList']);

Route::get('/registration',[ChildCareRegistrationController::class,'register']);
Route::post('/registration-form',[ChildCareRegistrationController::class,'registerpage'])->name('admin.registration');


Route::get('/login',[AuthController::class,'Log'])->name('login');;
Route::post('/login-form',[AuthController::class,'loginpage'])->name('admin.login');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/admin',[App\Http\controllers\AdminController::class,'index']);


Route::get('/child/create', [ChildController::class,'create']);
Route::post('/child/store', [ChildController::class,'store'])->name('child.store');
