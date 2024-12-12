<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;


Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function (){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/home', [DashboardController::class, 'admin_home']);

    Route::post('admin/home/post', [DashboardController::class, 'admin_home_post']);

    Route::get('admin/about', [DashboardController::class, 'admin_about']);

    Route::post('admin/about/post', [DashboardController::class, 'admin_about_post']);

    Route::get('admin/education', [DashboardController::class, 'admin_education']);

    Route::get('admin/experience', [DashboardController::class, 'admin_experience']);

    Route::get('admin/skills', [DashboardController::class, 'admin_skills']);

    Route::get('admin/work', [DashboardController::class, 'admin_work']);

    Route::get('admin/services', [DashboardController::class, 'admin_services']);

    Route::get('admin/contact', [DashboardController::class, 'admin_contact']);


    Route::get('admin/education/add', [EducationController::class, 'education_add']);

    Route::post('admin/education/post', [EducationController::class, 'education_add_post']);


    Route::get('admin/education/edit/{id}', [EducationController::class, 'education_add_edit']);

    Route::post('admin/education/post/{id}', [EducationController::class, 'education_add_edit_post']);

    Route::get('admin/education/delete/{id}', [EducationController::class, 'education_delete']);


    Route::get('admin/experience/add', [ExperienceController::class, 'experience_add']);

    Route::post('admin/experience/post', [ExperienceController::class, 'experience_add_post']);


    Route::get('admin/experience/edit/{id}', [ExperienceController::class, 'experience_add_edit']);

    Route::post('admin/experience/post/{id}', [ExperienceController::class, 'experience_add_edit_post']);

    Route::get('admin/experience/delete/{id}', [ExperienceController::class, 'experience_delete']);

});

Route::get('login', [AuthController::class, 'login']);

Route::post('login_admin', [AuthController::class, 'login_admin']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('forgot_admin', [AuthController::class, 'forgot_admin']);

Route::get('logout', [AuthController::class, 'logout']);

