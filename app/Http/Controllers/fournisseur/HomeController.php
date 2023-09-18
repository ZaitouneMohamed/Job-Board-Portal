<?php

namespace App\Http\Controllers\fournisseur;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function AppliedUsersOnAnnonce($id)
    {
        $annonce = Annonce::with("users")->find($id);
        return view('auth.profile.fournisseur.Users.UsersAppliedOnAnnonce', compact("annonce"));
    }
    function UsersSaveAnnonce($id)
    {
        $annonce = Annonce::with("users")->find($id);
        return view('auth.profile.fournisseur.Users.UsersSavingOnAnnonce', compact("annonce"));
    }
    function Userprofile($username)
    {
        $user = User::where('username', $username)->with(["Profile", "Skills", "Education"])->get();
        dd($user);
        return view('auth.profile.fournisseur.Users.UserProfile', compact("user"));
    }
}
