<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $photo = Photo::all();
        $page = "photo";

        return view("backoffice.photo.all",compact("photo","page"));       
    }


    public function destroy($id){
        $photo = Photo::find($id);
        $photo->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $photo = Photo::find($id);
        $page = "photo";

        return view("backoffice.photo.edit", compact("photo","page"));       
    }


    public function update($id, Request $request){
       $photo = Photo::find($id);
       $photo->nom = $request->nom;
       $photo->lien = $request->lien;
       $photo->categorie = $request->categorie;
       $photo->description = $request->description;    
       $photo->updated_at = now();   

       $photo->save();

       return redirect()->route("photo");
    }


    public function create(){
        return view("backoffice.photo.create");
    }



    public function store(Request $request){
        $photo = new Photo;
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->updated_at = now();   
 
        $photo->save();
 
        return redirect()->route("photo");
    }
}