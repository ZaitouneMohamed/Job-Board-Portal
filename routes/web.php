<?php

use App\Http\Controllers\fournisseur\AnnonceController;
use App\Http\Controllers\fournisseur\HomeController as FournisseurHomeController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', [ControllersHomeController::class, 'index'])->name("index");


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::controller(HomeController::class)->name("user.")->group(function () {
        Route::get("pending-announces", "MyAplliedAnnonce")->prefix("auth")->name("applied");
        Route::get("favorite-announces", "MyFavoritesAnnonce")->prefix("auth")->name("favorites");
        Route::get('apply_job/{user_id}/{announce_id}', 'apply_job')->name('apply_job');
        Route::get('toggle-favorite/{user_id}/{announce_id}', 'toggleFavorite')->name('toggle.favorite');
    });
});

Route::middleware(['auth', 'role:fournisseur'])->group(function () {
    Route::controller(FournisseurHomeController::class)->name("fournisseur.")->group(function () {
        Route::get('/userOnAnnonce/{id}', "AppliedUsersOnAnnonce")->name("UserappliedOnAnnonce");
        Route::get('/UsersSaveAnnonce/{id}', "UsersSaveAnnonce")->name("UsersSaveAnnonce");
        Route::get('/UserProfile/{username}', "Userprofile")->name("UserProfile");
    });
});

Route::post('profile/set', ProfileController::class)->name("set.profile");

Route::controller(ControllersHomeController::class)->group(function () {
    Route::get('/','index')->name("index");
    Route::get('/announces/{id}-{slug}', 'viewAnnonce')->name('announce.show');
    Route::get('/Categorie/{id}', 'GetAnnoncesOfCategorie')->name('annonce.categorie');
    Route::get('/announcesList', 'AnnouncesList')->name('announces.list');
});
