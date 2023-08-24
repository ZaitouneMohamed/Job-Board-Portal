<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\user\EducationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ExperienceController;
use App\Http\Controllers\user\SkillController;

Route::redirect('/', '/auth/login');

Route::controller(AuthController::class)->group(function () {

    Route::middleware("guest")->group(function () {
        Route::get("login", "LoginForm")->name("login");
        Route::post("login", "login")->name("login");
        Route::get("register", "registerForm")->name("register");
        Route::post("register", "register")->name("register");
    });

    Route::middleware("auth")->group(function () {
        Route::get("profile", "profile")->name("profile");
        Route::get("logout", "logout")->name("logout");
    });
});

Route::resource("experience", ExperienceController::class);
Route::resource("education", EducationController::class);
Route::resource("skills", SkillController::class);
