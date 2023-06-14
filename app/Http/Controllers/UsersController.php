<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255',
            'rut' => 'required|string|unique:users|max:255',
            'role_id' => 'required|exists:roles,id',
            'fechaNacimiento' => 'nullable|date',
            'telefono' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->rut = $request->rut;
        $user->role_id = $request->role_id;
        $user->fechaNacimiento = $request->fechaNacimiento;
        $user->telefono = $request->telefono;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255',
            'rut' => 'required|string|unique:users,rut,' . $id . '|max:255',
            'role_id' => 'required|exists:roles,id',
            'fechaNacimiento' => 'nullable|date',
            'telefono' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->rut = $request->rut;
        $user->role_id = $request->role_id;
        $user->fechaNacimiento = $request->fechaNacimiento;
        $user->telefono = $request->telefono;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }

    // Otros métodos del controlador...
}
