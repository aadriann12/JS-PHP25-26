<?php


$peliculas = [
    "El espíritu de la colmena" => [
        "año" => 1973, // año de estreno
        "sinopsis" => "Una niña en la posguerra española queda fascinada por la película 'Frankenstein' y vive entre realidad y fantasía.", // breve descripción
         "foto"=>"el_espiritu_de_la_colmena.jpg"
    ],
    "Volver" => [
        "año" => 2006, // año de estreno
        "sinopsis" => "Drama de Pedro Almodóvar sobre la familia, los secretos y la supervivencia de varias mujeres en La Mancha.", // descripción
   "foto"=>"volver.jpg"
    ],
    "Tristana" => [
        "año" => 1970,
        "sinopsis" => "Relación compleja entre una joven huérfana y su tutor; retrato de poder y dependencia.",
    "foto"=>"tristana.jpg"
    ],
    "La vaquilla" => [
        "año" => 1985,
        "sinopsis" => "Comedia satírica sobre la Guerra Civil española: un grupo intenta robar una vaca utilizada en una fiesta franquista.",
   "foto"=>"la_vaquilla.jpg"
    ],
    "Los otros" => [
        "año" => 2001,
        "sinopsis" => "Thriller gótico sobre una mujer y sus hijos fotosensibles que viven en una mansión aislada con secretos inquietantes.",
   "foto"=>"los_otros_the_others.jpg"
    ],
    "El laberinto del fauno" => [
        "año" => 2006,
        "sinopsis" => "Fábula oscura ambientada en la posguerra: una niña encuentra un mundo fantástico mientras su madre sufre con la brutalidad del régimen.",
    "foto"=>"el_laberinto_del_fauno.jpg"
    ],
    "Mar adentro" => [
        "año" => 2004,
        "sinopsis" => "Historia real de Ramón Sampedro, un hombre tetrapléjico que luchó por su derecho a morir dignamente.",
    ],
    "Ocho apellidos vascos" => [
        "año" => 2014,
        "sinopsis" => "Comedia romántica sobre los choques culturales entre un sevillano y una joven vasca.",
   
   "foto"=>"ocho_apellidos_vascos.jpg"
    ],
    "La lengua de las mariposas" => [
        "año" => 1999,
        "sinopsis" => "Relato tierno y amargo sobre la amistad entre un niño y su maestro en la víspera de la Guerra Civil.",
   "foto"=>"la_lengua_de_las_mariposas.jpg"
    ],
    "Tesis" => [
        "año" => 1996,
        "sinopsis" => "Suspense universitario sobre una estudiante que investiga la morbosa fascinación por las imágenes violentas.",
   "foto"=>"tesis.jpg"
    ],
    "Celda 211" => [
        "año" => 2009,
        "sinopsis" => "Un guardia de prisiones se ve atrapado en un motín y debe hacerse pasar por reo para sobrevivir.",
  "foto"=>"celda_211.jpg"
    ],
    "La piel que habito" => [
        "año" => 2011,
        "sinopsis" => "Thriller psicológico de Pedro Almodóvar sobre venganza y ética científica.,",
  "foto"=>"la_piel_que_habito.jpg"
    ],
];
$pelicula = isset($_GET['titulo']) ? $_GET['titulo'] : '';// el isset es para ver si esta declarada, si esta declarada bien sino lo pone en blanco para que no de error 
$mensaje='';
if ($pelicula === '') {
    $mensaje .= '<h3>No se ha enviado ningún título.</h3>';
} elseif (array_key_exists($pelicula, $peliculas)) {//array key_exists busca en el array si existe la clave que le pasamos en este caso pelicula
    $mensaje .= '<h3>La película "' .$pelicula . '" está en la lista. ('.$peliculas[$pelicula]['año'].')</h3>';
    $mensaje .= '<h3>sinopsis: ' . $peliculas[$pelicula]['sinopsis'] . '</h3>';
    $mensaje .= '<img src="'.$peliculas[$pelicula]['foto'].'" alt="'.$pelicula.'">';








} else {
    $mensaje .= '<h3>La película "' . $pelicula . '" no está en la lista.</h3>';
}

?>



<style>
h3{
    color:green;
    font-size: large;
    font-weight: bold;
    position: static;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h1>buscador de peliculas por titulo</h1>
        <label for="titulo"> titulo </label>
        <input type="text" id="titulo" name="titulo" required>
        <input type="submit" value="buscar pelicula">

    </form>
<hr><!--  para separar las partes con rayita-->

<?php 
  
        echo $mensaje; 
    ?>
</section>
</body>
</html>
 