<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // crear usuarios
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'rut' => '111',
                'role_id' => 1, // ID del rol de administrador
                'fechaNacimiento' => null,
                'telefono' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Empleado',
                'username' => 'empleado',
                'rut' => '222',
                'role_id' => 2, // ID del rol de empleado
                'fechaNacimiento' => null,
                'telefono' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
    }
}