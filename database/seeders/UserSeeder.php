<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Storage::deleteDirectory('/storage/app/public/fotos'); */
        /* Storage::disk('public')->deleteDirectory('fotos'); */
        /* User::create([
            'name' => 'Admin',
            'apellido' => '',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'telefono' => '71111111',
            'photo' => 'dir.jpg',
            'tipo' => '1',
        ])->assignRole('Director'); */

        User::create([
            'name' => 'Admin',
            'apellido' => '',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '71111111',
            'photo' => 'dir.jpg',
            'tipo' => '2',
        ])->assignRole('Profesor');

        User::create([
            'name' => 'Gino',
            'apellido' => 'Barroso Viruez',
            'email' => 'gino@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '72222222',
            'photo' => 'nicolas.jpg',
            'tipo' => '2',
        ])->assignRole('Profesor');

        User::create([
            'name' => 'Nicolas',
            'apellido' => 'Colque Orellana',
            'email' => 'nicolas@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '75347633',
            'photo' => 'nicolas.jpg',
            'tipo' => '3',
        ])->assignRole('Estudiante');
        User::create([
            'name' => 'Eliana',
            'apellido' => 'Zenteno Rojas',
            'email' => 'eliana@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '75655918',
            'photo' => 'eliana.jpg',
            'tipo' => '3',
        ])->assignRole('Estudiante');
        User::create([
            'name' => 'Guido',
            'apellido' => 'Van Rossum',
            'email' => 'guido@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '75555555',
            'photo' => 'avatar.png',
            'tipo' => '3',
        ])->assignRole('Estudiante');
        User::create([
            'name' => 'Tim',
            'apellido' => 'Berners Lee',
            'email' => 'tim@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '76666666',
            'photo' => 'avatar.png',
            'tipo' => '3',
        ])->assignRole('Estudiante');

        User::create([
            'name' => 'Padre',
            'apellido' => '',
            'email' => 'padre@gmail.com',
            'password' => Hash::make('123'),
            'telefono' => '74444444',
            'photo' => 'pad.jpg',
            'tipo' => '4',
        ])->assignRole('Padre');
    }
}
