<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            GestionSeeder::class,

            CursoSeeder::class,
            MateriaSeeder::class,
            HorarioSeeder::class,
            /* OnlineSeeder::class, */
        ]);
    }
}
