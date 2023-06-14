@extends('layout.app')

@section('content')
    <h1>Detalles del Usuario</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Nombre de Usuario</th>
                <td>{{ $user->username }}</td>
            </tr>
            <tr>
                <th>RUT</th>
                <td>{{ $user->rut }}</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>{{ $user->role->description }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ $user->fechaNacimiento }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $user->telefono }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
@endsection
