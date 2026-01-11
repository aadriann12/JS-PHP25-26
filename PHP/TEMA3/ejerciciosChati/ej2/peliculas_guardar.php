<?php
require 'funcionesBD.php';
$titulo=$_POST['titulo']??'';
$director=$_POST['director']??'';
$anio=$_POST['anio']??0;
$precio=$_POST['precio']??0;
$fecha_alquiler=$_POST['fecha_alquiler']??'';



    if(insertarPelicula($titulo, $director, $anio, $precio, $fecha_alquiler)){
        echo "Película guardada con éxito.";
    }else{
        echo "Error al guardar la película.";
    }


?>