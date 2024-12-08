<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;



Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function (){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/home', [DashboardController::class, 'admin_home']);

    Route::get('admin/about', [DashboardController::class, 'admin_about']);

    Route::get('admin/skills', [DashboardController::class, 'admin_skills']);

    Route::get('admin/work', [DashboardController::class, 'admin_work']);

    Route::get('admin/services', [DashboardController::class, 'admin_services']);

    Route::get('admin/contact', [DashboardController::class, 'admin_contact']);

});

Route::get('login', [AuthController::class, 'login']);

Route::post('login_admin', [AuthController::class, 'login_admin']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('forgot_admin', [AuthController::class, 'forgot_admin']);

Route::get('logout', [AuthController::class, 'logout']);

