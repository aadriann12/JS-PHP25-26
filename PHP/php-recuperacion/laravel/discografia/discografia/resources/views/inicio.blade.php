<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> hola, {{ $nombre }}  </h1>
<a href="{{route('albums.index')}}">Albums</a><!-- no es vista porque no es un controlador, es una vista, pero se puede acceder a la ruta de albums.index -->
</body>
</html>
