<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function MyAplliedAnnonce()
    {
        $annonces = Auth::user()->AppliedAnnonces;
        return view('auth.profile.user.annonces.pending', compact("annonces"));
    }
    public function MyFavoritesAnnonce()
    {
        $annonces = Auth::user()->FavoriteAnnonces;
        return view('auth.profile.user.annonces.favorites', compact("annonces"));
    }

    public function apply_job($job_id)
    {
        $user = User::find(Auth::user());
        $announcement = Annonce::find($job_id);
        $user->AppliedAnnonces()->attach($announcement);
        return redirect()->back()->with([
            "success" => "you applied successfully"
        ]);
    }
}
