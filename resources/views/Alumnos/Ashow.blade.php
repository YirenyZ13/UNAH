@extends('Plantilla')

@section('title', 'Detalles del Alumno')

@section('content')
    <h1>Detalles del Alumno</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cuenta: {{ $alumno->cuenta }}</h5>
            <p class="card-text">Nombre: {{ $alumno->nombre }}</p>
            <p class="card-text">Nota: {{ $alumno->nota }}</p>
            <p class="card-text">Carrera: {{ $alumno->carrera }}</p>
            <p class="card-title">Telefono:{{$alumno->telefono}}</p>

    
        </div>
    </div>
@endsection




