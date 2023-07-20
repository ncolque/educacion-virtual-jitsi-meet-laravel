<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            [
                'nombre' => 'Comunicación y Lenguajes',
                'descripcion' => 'Introducción general al estudio y conocimiento científico del lenguaje del ser humano.',
            ],
            [
                'nombre' => 'Matemática',
                'descripcion' => 'Estructura, orden y los patrones que se basa en contar, medir y describir las formas.',
            ],
            [
                'nombre' => 'Ciencias Naturales',
                'descripcion' => 'Comprenden todos los campos de la ciencia que estudian los seres vivos, y seres humanos.',
            ],
            [
                'nombre' => 'Ciencias Sociales',
                'descripcion' => 'Conjunto de disciplinas que estudian fenómenos relacionados con la realidad del ser humano.',
            ],
            [
                'nombre' => 'Valores',
                'descripcion' => 'Principios, virtudes o cualidades que caracterizan a una persona típicamente positivos.',
            ]
        ]);
    }
}
