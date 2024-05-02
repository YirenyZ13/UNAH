@extends('Plantilla')

@section('title', 'Lista de Alumnos')

@section('content')
    <h1>Lista de Alumnos</h1>

    <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Nuevo Alumno</a>

    <table class="table">
        <thead>
            <tr>
                <th>Cuenta</th>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->cuenta }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->nota }}</td>
                    <td>{{ $alumno->carrera }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->cuenta) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->cuenta) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->cuenta) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        <a href="{{ route('alumnos.telefonos', $alumno->cuenta) }}" class="btn btn-secondary">Ver Teléfonos</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



