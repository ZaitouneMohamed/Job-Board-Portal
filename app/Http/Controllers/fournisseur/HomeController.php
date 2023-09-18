<?php

namespace App\Http\Controllers\fournisseur;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function AppliedUsersOnAnnonce($id)
    {
        $annonce = Annonce::with("users")->find($id);
        return view('pages.Users.UsersAppliedOnAnnonce',compact("annonce"));
    }
    function UsersSaveAnnonce($id)
    {
        $annonce = Annonce::with("users")->find($id);
        return view('pages.Users.UsersSavingOnAnnonce',compact("annonce"));
    }
}
