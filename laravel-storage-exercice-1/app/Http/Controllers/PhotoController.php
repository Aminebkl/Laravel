<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        $photo = Photo::all();
        $page = "photo";

        return view("backoffice.photo.all",compact("photo","page"));       
    }


    public function destroy(Photo $photo){
        $photo->delete();

        return redirect()->back();       
    }


    public function edit(Photo $photo){
       
        return view("backoffice.photo.edit", compact("photo","page"));       
    }


    public function update(Photo $photo, Request $request){
       $photo->nom = $request->nom;
       $photo->lien = $request->lien;
       $photo->categorie = $request->categorie;
       $photo->description = $request->description;    
       $photo->updated_at = now();   

       $photo->save();

       return redirect()->route("photo.index");
    }


    public function create(){
        return view("backoffice.photo.create");
    }



    public function store(Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'lien' => 'required',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
        $photo = new Photo;
        $photo->nom = $request->nom;
        $photo->lien = $request->file("lien")->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();   
 
        $photo->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photo.index')->with('message', 'The success message!');
    }

    public function download($id) {
        $photo = Photo::find($id);
        return Storage::disk("public")->download("img/" . $photo->lien);
    }
}
