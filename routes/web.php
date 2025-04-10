<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('forgot-password', [AuthController::class, 'forgotpassword']);
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset']);




// Route::get('admin/admin/list', function () {
//   return view('admin.admin.list');
// });


Route::group(['middlwere' => 'admin'], function () {

  Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
  Route::get('admin/admin/list', [AdminController::class, 'list']);
  Route::get('admin/admin/add', [AdminController::class, 'add']);
  Route::post('admin/admin/add', [AdminController::class, 'insert']);
  Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']);
  Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
  Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete']);

  //class url
  Route::get('admin/class/list', [ClassController::class, 'list']);
  Route::get('admin/class/add', [ClassController::class, 'add']);
  Route::post('admin/class/add', [ClassController::class, 'insert']);
  Route::get('admin/class/edit/{id}', [ClassController::class, 'edit']);
  Route::post('admin/class/edit/{id}', [ClassController::class, 'update']);
  Route::get('admin/class/delete/{id}', [ClassController::class, 'delete']);

  
});

Route::group(['middlwere' => 'teacher'], function () {

  Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middlwere' => 'child'], function () {

  Route::get('child/dashboard', [DashboardController::class, 'dashboard']);
  
});

Route::group(['middlwere' => 'parent'], function () {

  Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
  
});
