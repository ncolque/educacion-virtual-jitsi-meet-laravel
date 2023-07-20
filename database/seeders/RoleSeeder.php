<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $director = Role::create(['name' => 'Director']);
        $profesor = Role::create(['name' => 'Profesor']);
        $estudiante = Role::create(['name' => 'Estudiante']);
        $padre = Role::create(['name' => 'Padre']);

        Permission::create(['name' => 'login'])->syncRoles([$director, $profesor, $estudiante, $padre]);

        Permission::create(['name' => 'users.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'gestions.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'materias.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'horarios.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'cursos.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'periodos.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'inscripcions.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'calificacions.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'actividads.index'])->syncRoles([$profesor]);
        Permission::create(['name' => 'asistencias.index'])->syncRoles([$profesor]);
        
    }
}
