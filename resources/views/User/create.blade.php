@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Create User</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
            </div>

            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" class="form-control" id="rut" name="rut" value="{{ old('rut') }}" required>
            </div>

            <div class="form-group">
                <label for="role_id">Role:</label>
                <select class="form-control" id="role_id" name="role_id" required>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
