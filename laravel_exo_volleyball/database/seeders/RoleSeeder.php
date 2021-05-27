<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nom' => 'Avant'
        ]);
        DB::table('roles')->insert([
            'nom' => 'Central'
        ]);
        DB::table('roles')->insert([
            'nom' => 'Arrière'
        ]);
        DB::table('roles')->insert([
            'nom' => 'Remplacent'
        ]);
    }
}
