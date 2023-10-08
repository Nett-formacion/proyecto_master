<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datos=[
            'name' => 'Manuel Alejandro',
            'email' => 'a@a.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
            'nick'=>'admin',
            'department'=>'informatica',
            'surname'=>'Romero Miguel',
        ];
        $user = new User($datos);
        $user->assignRole('admin');
        $user->saveOrFail();

        $datos=[
            'name' => 'Miguel',
            'email' => 'p@p.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
            'nick'=>'profeMiguel',
            'department'=>'informatica',
            'surname'=>'Morillas',

        ];
        $user = new User($datos);

        $user->assignRole('profesor');
        $user->saveOrFail();
        $datos=[
            'name' => 'María',
            'email' => 'al@al.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
            'nick'=>'Maria',
            'department'=>'informatica',
            'surname'=>'Ruiz Rodríguez',
        ];
        $user = new User($datos);
        $user->assignRole('alumno');
        $user->saveOrFail();
    }
}
