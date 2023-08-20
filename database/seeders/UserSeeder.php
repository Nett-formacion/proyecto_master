<?php

namespace Database\Seeders;

use App\Models\User;
use DragonCode\Support\Facades\Helpers\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



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
            'departement'=>'informatica',
            'surname'=>'Romero Miguel',
        ];
        $user = new User($datos);
        $user->assignRole('admin');
        $user->saveOrFail();

        $datos=[
            'name' => 'Miguel ',
            'email' => 'p@p.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
            'nick'=>'profeMiguel',
            'departement'=>'informatica',
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
            'departement'=>'informatica',
            'surname'=>'Ruiz Rodríguez',
        ];
        $user = new User($datos);
        $user->assignRole('alumno');
        $user->saveOrFail();
    }
}
