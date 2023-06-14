@extends('layout.app')

@section('content')
    <h1>Crear Rol</h1>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
