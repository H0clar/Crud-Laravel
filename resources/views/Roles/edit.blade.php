@extends('layout.app')

@section('content')
    <h1>Editar Rol</h1>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $role->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
