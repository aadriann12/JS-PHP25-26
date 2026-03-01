@extends('layouts.app')
@section('content')
    <h1>Listado de pacientes</h1>
    <a href="{{ route('patients.create') }}">Crear paciente</a>
    <ul>
        @foreach ($patients as $patient)
            <li>{{ $patient->name }} - {{ $patient->age }} años</li>
            <a href="{{ route('patients.edit', $patient->id) }}">Editar</a>
            <a href="{{ route('patients.show', $patient->id) }}">Ver</a>
            <form action="{{route=('patients.destroy', $patient->id)}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        @endforeach
    </ul>

