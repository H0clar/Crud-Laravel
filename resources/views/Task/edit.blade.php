@extends('layout.app')

@section('content')
    <h1>Editar Tarea</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $task->description }}" required>
        </div>

        <div class="form-group">
            <label for="responsable">Responsable</label>
            <input type="text" name="responsable" id="responsable" class="form-control" value="{{ $task->responsable }}" required>
        </div>

        <div class="form-group">
            <label for="fechaAsignacion">Fecha de Asignación</label>
            <input type="date" name="fechaAsignacion" id="fechaAsignacion" class="form-control" value="{{ $task->fechaAsignacion }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendiente" {{ $task->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en proceso" {{ $task->estado === 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="completado" {{ $task->estado === 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
