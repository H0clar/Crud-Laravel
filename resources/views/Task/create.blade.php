@extends('layout.app')

@section('content')
    <h1>Crear Nueva Tarea</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="description">Descripción:</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="responsable">Responsable:</label>
            <select name="responsable" id="responsable" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fechaAsignacion">Fecha de Asignación:</label>
            <input type="date" name="fechaAsignacion" id="fechaAsignacion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendiente">Pendiente</option>
                <option value="en_proceso">En Proceso</option>
                <option value="completada">Completada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Tarea</button>
    </form>
@endsection


