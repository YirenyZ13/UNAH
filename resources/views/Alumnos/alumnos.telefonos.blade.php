

@extends('Plantilla')

@section('title', 'Teléfonos del Alumno')

@section('content')
    <h1>Teléfonos del Alumno</h1>

    <ul>
        @foreach ($telefonos as $telefono)
            <li><strong>Teléfono:</strong> {{ $telefono->telefono }}
            <strong>Tipo:</strong> {{ $telefono->tipo }}</li>
        @endforeach
    </ul>

    <a href="{{ route('alumnos.Aindex') }}" class="btn btn-secondary">Volver</a>
@endsection
