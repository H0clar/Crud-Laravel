@extends('layout.app')

@section('content')
    <h1>Listado de Tareas</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Crear Tarea</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Responsable</th>
                <th>Fecha de Asignación</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->responsable }}</td>
                    <td>{{ $task->fechaAsignacion }}</td>
                    <td>{{ $task->estado }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
