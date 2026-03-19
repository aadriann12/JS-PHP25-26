@extends('layouts.app')
@section('content')
<h1>{{$car->modelo}}</h1>
<p>{{$car->chasis}}</p>
<p>{{$car->category->name}}</p>
<p>Pilotos:
    @foreach($car->pilots as $pilot)
    {{$pilot->name}}
    @endforeach
</p>
<a href="{{route('cars.edit',$car)}}">Editar</a>
<a href="{{route('cars.index')}}">Volver al listado</a>
