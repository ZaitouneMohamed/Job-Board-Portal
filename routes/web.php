<?php

use App\Http\Controllers\fournisseur\AnnonceController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ControllersHomeController::class,'index']);

Route::middleware(['auth', 'role:user'])->group(function () {

    Route::controller(HomeController::class)->name("user.")->group(function () {
        Route::get("pending-annonces", "MyAplliedAnnonce")->prefix("auth")->name("applied");
        Route::get("favorite-annonces", "MyFavoritesAnnonce")->prefix("auth")->name("favorites");
    });
});

Route::resource("annonces", AnnonceController::class);

