<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gestions')->insert([
            [
                'nombre' => 'Gestión 2020',
                'descripcion' => 'Apertura del Ciclo Escolar de Educación Regular 2020',
            ],
            [
                'nombre' => 'Gestión 2021',
                'descripcion' => 'Apertura del Ciclo Escolar de Educación Regular 2021 - Modalidad Virtual',
            ],
            [
                'nombre' => 'Gestión 2022',
                'descripcion' => 'Apertura del Ciclo Escolar de Educación Regular Presencial 2022',
            ],
            [
                'nombre' => 'Gestión 2023',
                'descripcion' => 'Apertura del Ciclo Escolar de Educación Regular Presencial 2023',
            ]
        ]);
    }
}
