
@extends('Plantilla')

@section('title', 'Crear Nuevo Alumno')

@section('content')
    <h1>Editar Alumno</h1>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cuenta" class="form-label">Cuenta</label>
            
            <input type="text" class="form-control" id="cuenta" name="cuenta" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="nota" class="form-label">Nota</label>
            <input type="number" class="form-control" id="nota" name="nota" required>
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" name="carrera" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection






