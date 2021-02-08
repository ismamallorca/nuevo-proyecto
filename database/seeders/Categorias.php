<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('superman')->truncate();

        DB::table('superman')->insert([
            'nombre' => 'Superman I',
            'nombre' => 'Superman II',
            'nombre' => 'Superman III',
            'nombre' => 'Superman IV',
            'nombre' => 'Superman Returns',
        ]);
    }
}
