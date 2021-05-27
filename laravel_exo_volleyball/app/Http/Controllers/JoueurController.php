<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        return view("backoffice.joueur.all", compact("joueurs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.joueur.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur = new Joueur();
        $joueur -> nom = $request -> nom;
        $joueur -> prenom = $request -> prenom;
        $joueur -> age = $request -> age;
        $joueur -> numero = $request -> numero;
        $joueur -> pays = $request -> pays;
        $joueur -> genre_id = $request -> genre_id;
        $joueur -> role_id = $request -> role_id;
        $joueur -> equipe_id = $request -> equipe_id;
        $joueur -> created_at = now();

        $joueur -> save();

        return redirect() -> route("continents.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view("backoffice.joueur.show", compact("joueur"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        return view("backoffice.joueur.edit", compact("joueur"));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $joueur -> nom = $request -> nom;
        $joueur -> prenom = $request -> prenom;
        $joueur -> age = $request -> age;
        $joueur -> numero = $request -> numero;
        $joueur -> pays = $request -> pays;
        $joueur -> genre_id = $request -> genre_id;
        $joueur -> role_id = $request -> role_id;
        $joueur -> equipe_id = $request -> equipe_id;
        $joueur -> updated_at = now();

        $joueur -> save();

        return redirect() -> route("joueurs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur -> delete();

        return redirect() -> back();
    }
}

