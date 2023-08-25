<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function MyAplliedAnnonce()
    {
        $annonces = Auth::user()->AppliedAnnonces;
        return view('auth.profile.user.annonces.pending',compact("annonces"));
    }
    public function MyFavoritesAnnonce()
    {
        $annonces = Auth::user()->FavoriteAnnonces;
        return view('auth.profile.user.annonces.favorites',compact("annonces"));
    }
}
