@extends('layout.app')

@section('content')
    <h1>Rol: {{ $role->description }}</h1>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <p>ID: {{ $role->id }}</p>
    <p>Descripción: {{ $role->description }}</p>
@endsection
