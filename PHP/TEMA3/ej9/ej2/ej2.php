<?php

$arrayPeliclas = ['El Padrino', 'Titanic', 'Avatar', 'La La Land', 'Interestelar'];
$pelicula = isset($_POST['titulo']) ? $_POST['titulo'] : '';// el isset es para ver si esta declarada, si esta declarada bien sino lo pone en blanco para que no de error 

if ($pelicula === '') {
    echo '<h1>No se ha enviado ningún título.</h1>';
} elseif (in_array($pelicula, $arrayPeliclas)) {// en el array peliculas busca la pelicula y el true es para que sea estrictamente igual, false sería igual en valor pero no en tipo
    echo '<h1>La película "' .$pelicula . '" está en la lista.</h1>';
} else {
    echo '<h1>La película "' . $pelicula . '" no está en la lista.</h1>';
}

?>