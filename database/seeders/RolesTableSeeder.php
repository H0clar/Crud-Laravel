<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        DB::table('roles')->insert([
            ['description' => 'administrador'],
            ['description' => 'empleado'],
        ]);
    }
}
