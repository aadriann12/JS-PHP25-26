<?php
require 'funcionesBD.php';
$peliculas= obtenerPeliculas();

foreach($peliculas as $pelicula){
    echo "Título: " . htmlspecialchars($pelicula['titulo']) . "<br>";
    echo "Director: " . htmlspecialchars($pelicula['director']) . "<br>";
    echo "Año: " . htmlspecialchars($pelicula['anio']) . "<br>";
    echo "Precio: " . htmlspecialchars($pelicula['precio']) . "<br>";
    echo "Fecha de alquiler: " . htmlspecialchars($pelicula['fecha_alquiler']) . "<br><hr>";
}






?>