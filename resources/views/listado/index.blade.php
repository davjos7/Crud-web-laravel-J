@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Personas ahhhhhhh</h1>
    <a href="{{ route('listado.create') }}" class="btn btn-primary mb-3">Crear Persona</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php                                // otra manera de abrir php
                $contador = 1;
            @endphp
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $contador }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido }}</td>
                <td>{{ $persona->fecha_nacimiento }}</td>
                <td>{{ $persona->direccion }}</td>
                <td>{{ $persona->telefono }}</td>
                <td>
                    <a href="{{ route('listado.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('listado.destroy', $persona->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta persona?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @php
                $contador++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection
