<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
            [
                'hora_inicio' => '08:00:00',
                'hora_fin' => '09:15:00',
            ],
            [
                'hora_inicio' => '09:30:00',
                'hora_fin' => '10:45:00',
            ],
            [
                'hora_inicio' => '11:00:00',
                'hora_fin' => '12:15:00',
            ]
        ]);
    }
}
