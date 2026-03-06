@extends('layouts.app')


@section('content')
<h1>Listado de coches</h1>
<a href="{{route('cars.create')}}">Crear nuevo coche</a>
@foreach($cars as $car)
    <h2>{{$car->modelo}}</h2>
    <p>{{$car->chasis}}</p>
    <p>{{$car->category->name}}</p>
    <a href="{{route('cars.edit',$car)}}">Editar</a>
   
@endforeach


@endsection
