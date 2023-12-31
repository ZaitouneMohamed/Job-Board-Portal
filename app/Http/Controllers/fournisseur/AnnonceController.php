<?php

namespace App\Http\Controllers\fournisseur;

use App\Http\Controllers\Controller;
use App\Http\Requests\fournisseur\Annonce\CreateAnnonceRequest;
use App\Models\Annonce;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth", "role:fournisseur"])->except("show");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::where('user_id', Auth::user()->id)->get();
        return view('auth.profile.fournisseur.annonces', compact("annonces"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAnnonceRequest $request)
    {
        $annonce = Annonce::create([
            'user_id' => auth()->user()->id,
            'type' => 1,
            'salary' => $request->salary,
            'company_id' => $request->companie_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'requirement' => $request->requirement,
            'location' => $request->location,
            'statue' => 1,
            'categorie_id' => $request->categorie_id,
        ]);
        return redirect()->back()->with([
            "success" => "announce created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announce = Annonce::with("categorie", "Companie", "user")->findOrFail($id);
        return view('pages.viewAnnonce', compact('announce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
