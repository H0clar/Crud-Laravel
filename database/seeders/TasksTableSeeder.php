<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear tareas
        DB::table('tasks')->insert([
            [
                'description' => 'Tarea 1',
                'responsable' => 'Empleado 1',
                'fechaAsignacion' => '2023-06-11',
                'estado' => 'pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Tarea 2',
                'responsable' => 'Empleado 2',
                'fechaAsignacion' => '2023-06-12',
                'estado' => 'en proceso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agregar más tareas si es necesario
        ]);
    }
}
