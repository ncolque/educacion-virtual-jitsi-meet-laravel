<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'nombre' => 'Primero',
                'descripcion' => 'Se realiza un repaso de todo lo avanzado en kinder.',
                'asignacion' => 'A',
            ],
            [
                'nombre' => 'Tercero',
                'descripcion' => 'Se hace una evaluacion de lo aprendido en 1ro y 2do.',
                'asignacion' => 'B',
            ],
            [
                'nombre' => 'Quinto',
                'descripcion' => 'Se enseña una base fuerte de las materias esenciales.',
                'asignacion' => 'C',
            ]
        ]);
    }
}
