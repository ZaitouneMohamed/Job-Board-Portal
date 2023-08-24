<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/auth/login');

Route::controller(AuthController::class)->group(function () {

    Route::middleware("guest")->group(function(){
        Route::get("login", "LoginForm")->name("login");
        Route::post("login", "login")->name("login");
        Route::get("register", "registerForm")->name("register");
        Route::post("register", "register")->name("register");
    });

    Route::middleware("auth")->group(function(){
        Route::get("profile", "profile")->name("profile");
        Route::get("logout", "logout")->name("logout");
    });

});
