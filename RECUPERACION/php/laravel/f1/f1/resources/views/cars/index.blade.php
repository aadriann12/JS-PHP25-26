@extends('layouts.app')
@section('content')
    <h1>Listado de coches</h1>
    <a href="{{route('cars.create')}}" class="btn btn-primary mb-3">Crear coche</a>
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Chasis</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->modelo}}</td>
                <td>{{$car->chasis}}</td>
                <td>{{$car->category->nombre}}</td>
                <td><a href="{{route('cars.show',$car)}}" class="btn btn-info">Ver</a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
