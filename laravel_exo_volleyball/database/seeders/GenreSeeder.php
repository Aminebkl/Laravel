<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'type' => 'H'
        ]);
        DB::table('genres')->insert([
            'type' => 'F'
        ]);
        DB::table('genres')->insert([
            'type' => 'NB'
        ]);
    }
}
