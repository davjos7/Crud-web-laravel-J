@extends('layouts.app')

@section('content')
<div class="container">
<h1>Editar Personas</h1>
    <form method="POST" action="{{ route('listado.update', $persona->id) }}"> // EDITAR UN CAMPO
        @csrf

        @method('PUT') // METODO ACTIUALIZAR OBLIGATORIO
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $persona->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ $persona->apellido }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $persona->fecha_nacimiento }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ $persona->direccion }}" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" class="form-control" value="{{ $persona->telefono }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
