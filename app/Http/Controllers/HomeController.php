<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topCategories = Categorie::withCount('Annonces')
            ->orderByDesc('annonces_count')
            ->take(8)
            ->get();
        $annonces = Annonce::take(6)->with('categorie')->latest()->get();
        $companies = Company::withCount('Annonces')
            ->orderByDesc('annonces_count')
            ->take(4)
            ->get();
        return view('welcome', compact("topCategories", "annonces", "companies"));
    }

    public function viewAnnonce($id, $slug)
    {
        $announce = Annonce::find($id);
        if ($announce->slug === $slug) {
            return view('pages.viewAnnonce', compact("announce"));
        }
        return abort(404);
    }

    public function AnnouncesList()
    {
        $annonces = Annonce::latest()->paginate(15);
        return view('pages.AnnoncesList', compact('annonces'));
    }
}
