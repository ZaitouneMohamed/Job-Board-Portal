<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view("admin.auth.login");
})->name("login")->middleware("guest");

Route::middleware(["AdminRedirection", "auth", "role:admin"])->group(function () {
    Route::get('/', function () {
        return view("admin.home");
    })->name("home");
});
