@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Jugadores</h1>
    <a href="{{ route('jugadores.index') }}" class="btn btn-primary mb-3">Crear Jugadores</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>camiseta</th>
                <th>posicion</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugadores as $jugadore)
            <tr>
                <td>{{ $jugadore->id }}</td>
                <td>{{ $jugadore->nombre }}</td>
                <td>{{ $jugadore->camiseta }}</td>
                <td>{{ $jugadore->posicion }}</td>
                <td>{{ $jugadore->nacionalidad }}</td>
                <td>
                    <a href="{{ route('listadoj.edit', $jugadores->id) }}" class="btn btn-primary">Editar</a>
                    <form action="#" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta persona?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
