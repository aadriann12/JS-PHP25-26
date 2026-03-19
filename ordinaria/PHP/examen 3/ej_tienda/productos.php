<?php


require_once 'ConexionBD.php';
function obtenerProductos(){
$conexion=ConexionBD::getConexion();
$sql='select id,nombre,categoria,stock,precio from productos';
try {
     $stmnt=$conexion->prepare($sql);
$stmnt->execute();

return $stmnt->fetchAll(\PDO::FETCH_ASSOC);
} catch (\PDOException $e) {
   echo("error".$e->getMessage());
}



}
if ($_SERVER['REQUEST_METHOD']==='POST'&& isset($_POST['guardar'])) {
    $conexion=ConexionBD::getConexion();
    $productosBD=obtenerProductos();
         $sql="update productos set precio=? where id=?";
    foreach ($productosBD as $producto ) {
        if($_POST[(string)$producto['id']] != $producto['precio']){
       
         try {
               $stmnt=$conexion->prepare($sql);
        $nuevoPrecio=(float)$_POST[(string)$producto['id']];
            $id=(int)$producto['id'];
            $stmnt->execute([$nuevoPrecio,$id]);
            echo('cambios realizados');
         } catch (\PDOException $th) {
            echo('error: '.$th->getMessage());
         }
        }

        
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h1>gestion de productos</h1>
    <table>
<tr>

<th>
    id
</th>
<th>
    nombre
</th>
<th>
    categoria
</th>
<th>
   stock
</th>
<th>
    precio
</th>
</tr>

<?php
$productos=obtenerProductos();
foreach ($productos as $producto) {
 echo '<tr>';
echo '<td>'.$producto['id'].'</td>';
echo '<td>'.$producto['nombre'].'</td>';
echo '<td>'.$producto['categoria'].'</td>';
echo '<td>'.$producto['stock'].'</td>';

echo '<td><input type="number" name="'.$producto['id'].'" value="'.$producto['precio'].'"></td>';
echo '</tr>';

}

?>


</table><button type="submit"name="guardar">guardar cambios</button>
</form>
</body>
</html>