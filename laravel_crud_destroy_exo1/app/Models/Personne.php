<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table = "personnes";
    protected $fillable = [
        "nom",
        "prenom",
        "date de naissance",
        "genre",
        
    ];
    protected $hidden = [
        "prenom",
        "date de naissance",
        "genre",
    ];
}


  