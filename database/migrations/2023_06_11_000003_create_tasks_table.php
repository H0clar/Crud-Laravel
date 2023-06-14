<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(10);

        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        $users = User::all();

        return view('task.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'responsable' => 'required',
            'fechaAsignacion' => 'required|date',
        ]);

        $task = new Task();
        $task->description = $request->input('description');
        $task->responsable = $request->input('responsable');
        $task->fechaAsignacion = $request->input('fechaAsignacion');
        $task->estado = 'pendiente';
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Tarea creada exitosamente');
    }
}
