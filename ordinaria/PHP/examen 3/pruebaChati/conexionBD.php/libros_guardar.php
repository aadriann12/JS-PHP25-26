<?php
require 'funcionesBD.php';

$titulo=$_POST['titulo']??'';
$anio=(int)($_POST['anio']??0);
$precio=(float)($_POST['precio']??0);//cambio a float porque por defecto es string
$fecha_adquisicion=$_POST['fecha_adquisicion']??'';

if(insertarLibro($titulo, $anio, $precio, $fecha_adquisicion)){
    echo "Libro guardado exitosamente.";
}else{
    echo "Error al guardar el libro.";

}

?>