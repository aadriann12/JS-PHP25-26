<?php


$juegos = [

    [
        "titulo"     => "Elden Ring",
        "plataforma" => "PC",
        "genero"     => "RPG",
        "precio"     => 59.99,
        "online"     => true
    ],

    [
        "titulo"     => "God of War Ragnarok",
        "plataforma" => "PS5",
        "genero"     => "Aventura",
        "precio"     => 69.99,
        "online"     => false
    ],

    [
        "titulo"     => "FIFA 23",
        "plataforma" => "Xbox",
        "genero"     => "Deportes",
        "precio"     => 49.99,
        "online"     => true
    ],

    [
        "titulo"     => "The Legend of Zelda: Tears of the Kingdom",
        "plataforma" => "Switch",
        "genero"     => "Aventura",
        "precio"     => 59.99,
        "online"     => false
    ],

    [
        "titulo"     => "Cyberpunk 2077",
        "plataforma" => "PC",
        "genero"     => "Accion",
        "precio"     => 39.99,
        "online"     => true
    ],

    [
        "titulo"     => "Horizon Forbidden West",
        "plataforma" => "PS5",
        "genero"     => "RPG",
        "precio"     => 69.99,
        "online"     => false
    ],

    [
        "titulo"     => "Halo Infinite",
        "plataforma" => "Xbox",
        "genero"     => "Accion",
        "precio"     => 59.99,
        "online"     => true
    ],

    [
        "titulo"     => "Mario Kart 8 Deluxe",
        "plataforma" => "Switch",
        "genero"     => "Deportes",
        "precio"     => 49.99,
        "online"     => true
    ],

    [
        "titulo"     => "The Witcher 3",
        "plataforma" => "PC",
        "genero"     => "RPG",
        "precio"     => 29.99,
        "online"     => false
    ],

    [
        "titulo"     => "Gran Turismo 7",
        "plataforma" => "PS5",
        "genero"     => "Deportes",
        "precio"     => 69.99,
        "online"     => true
    ]

];

function listarJuegos(array $juegos){
foreach ($juegos as $key => $juego) {
echo("<h1> {$juego['titulo']} -  {$juego['plataforma']}  -  {$juego['genero']}  -  {$juego['precio']}     </h1>");
echo("<br>");
}
}
function filtrarPorPlataforma(array $juegos, string $plataforma):array{

$respuesta=[];

foreach ($juegos as $juego) {
  if ($juego["plataforma"]==$plataforma) {
    array_push($respuesta, $juego);

  } 




}

  return $respuesta;


}
function filtrarPorGenero(array $juegos, string $genero):array{

$respuesta=[];

foreach ($juegos as $juego) {
  if ($juego["genero"]==$genero) {
    array_push($respuesta, $juego);

  } 




}

  return $respuesta;


}
function obtenerMediaPrecio($juegos):float{
$suma=0;
$cont=0;
foreach ($juegos as $key => $juego) {
    $suma+=$juego["precio"];
    $cont++;

}
$media=($suma/$cont);
return $media;



}







//ListarJuegos($juegos);
//$respuesta=filtrarPorPlataforma($juegos,"Switch");
//print_r($respuesta);
echo(obtenerMediaPrecio($juegos));
?>