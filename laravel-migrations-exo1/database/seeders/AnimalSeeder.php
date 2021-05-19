<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("animal")->insert([
            "nom"=>"chien",
            "espece"=>"domestique",
            "age"=> 7,
            "ddn"=> "2000-06-25"
        ]);

        DB::table("animal")->insert([
            "nom"=>"chien",
            "espece"=>"domestique",
            "age"=> 7,
            "ddn"=> "2000-06-25"
        ]);

        DB::table("animal")->insert([
            "nom"=>"chien",
            "espece"=>"domestique",
            "age"=> 7,
            "ddn"=> "2000-06-25"
        ]);
    }
}
