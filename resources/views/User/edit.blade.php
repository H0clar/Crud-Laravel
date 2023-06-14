@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
            </div>

            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" class="form-control" id="rut" name="rut" value="{{ $user->rut }}" required>
            </div>

            <div class="form-group">
                <label for="role_id">Role:</label>
                <select class="form-control" id="role_id" name="role_id" required>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if ($role->id === $user->role_id) selected @endif>{{ $role->description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ $user->fechaNacimiento }}">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $user->telefono }}">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
