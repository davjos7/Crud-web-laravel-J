@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Formulario de Jugadores</h1>
    <form method="POST" action="{{ route('jugadores.store') }}">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido">Numero de Camiseta</label>
            <input type="number" name="camiseta" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Posición</label>
            <input type="text" name="posicion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="direccion">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
