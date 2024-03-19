<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\PendingController;

use App\Http\Controllers\GuardianController;
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
Route::get('/login',[AuthController::class,'Log'])->name('login');
//Route ::group(["middleware"=>"member"], function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/child-list',[DashboardController::class, 'childList']);
    
    Route::get('/registration',[ChildCareRegistrationController::class,'register'])->name('admin.register');
    
    Route::post('/registration-form',[ChildCareRegistrationController::class,'registerpage'])->name('admin.registration');
    
    
    
    Route::post('/login-form',[AuthController::class,'loginpage'])->name('admin.login');
    
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    
    Route::get('/admin',[App\Http\controllers\AdminController::class,'index']);
    //child portion
    Route::get('/child/index',[ChildController::class,'childIndex']) ->name('child.index');
    Route::get('/child/create', [ChildController::class,'create'])->name('child.create');
    Route::post('/child/store', [ChildController::class,'store'])->name('child.store');
    Route::get('/child/{id}/edit', [ChildController::class,'edit'])->name('child.edit');
    Route::put('/child/{id}/update', [ChildController::class,'update'])->name('child.update');
    Route::get('/child/{id}/delete', [ChildController::class,'delete'])->name('child.delete');




    Route::get('/guardian/create', [GuardianController::class,'create'])->name('guardian.create');
Route::post('/guardian/store', [GuardianController::class,'store'])->name('guardian.store');


Route::get('/guardian/list', [ListController::class, 'list'])->name('guardian.list');
Route::get('/list/create', [ListController::class,   'create'])->name('list.create');
Route::get('/approve/{id}', [ApproveController::class,'approve'])->name('approve');


// teacher portion
Route::get('/teacher/index',[TeacherController::class,'teacherIndex']) ->name('teacher.index');
Route::get('/teacher/from',[TeacherController::class,'teacherFrom']) ->name('teacher.post');
Route::post('/teacher/store',[TeacherController::class,'teacherStore']) ->name('teacher.store');
Route::get('/teacher/{id}/edit', [TeacherController::class,'edit'])->name('teacher.edit');
Route::put('/teacher/{id}/update', [TeacherController::class,'update'])->name('teacher.update');
Route::get('/teacher/{id}/delete', [TeacherController::class,'delete'])->name('teacher.delete');