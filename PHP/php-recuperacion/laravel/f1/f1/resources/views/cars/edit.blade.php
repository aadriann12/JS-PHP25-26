@extends('layouts.app')

@section('content')
  <h1>Editar coche</h1>
  <form action={{route('cars.update',$car)}} method="POST">
@csrf
@method ('PUT')
<input type="text" name="modelo" value="{{old('modelo',$car->modelo)}}">
<input type="text" name="chasis" value="{{old('chasis',$car->chasis)}}">
<select name="category_id">
    @foreach($categories as $category)
    <option value="{{$category->id}}" {{old('category_id',$car->category_id)==$category->id?'selected':''}}>{{$category->nombre}}</option>
    @endforeach
</select>
<label for="pilots">Pilotos</label>
<select name="pilots[]" multiple>
    @foreach($pilots as $pilot)
    <option value="{{$pilot->id}}"
{{$car->pilots->contains($pilot->id) ? 'selected' : ''}}>{{$pilot->nombre}}</option>
    @endforeach
</select>
<button type="submit">Enviar</button>
  </form>
@endsection
