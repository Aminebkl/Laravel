<?php

namespace App\Http\Controllers;

use App\Models\PersonnesModel;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index() {
        $personnes = PersonnesModel::all();

        return view("personnes",
        compact("personnes"));
    }
    public function destroy($id) {
        $personne = PersonnesModel::find($id);
        $personne -> delete();

        return redirect() -> back();
    }
}

