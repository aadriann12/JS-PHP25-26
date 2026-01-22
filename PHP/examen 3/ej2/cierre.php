
<?php


function cierre($fecha){
$fecha=date('Y-m-d');
try {
$conexion=ConexionBD::getConexion();
$sql="delete from reservas where fecha=?";
$sql2="update clases set reservadas=0";
$conexion->beginTransaction();

$stmnt=$conexion->prepare($sql);


$stmnt2=$conexion->prepare($sql2);
if ($stmnt->execute([$fecha])==false) {
    $conexion->rollBack();
    echo("No se pudo realizar el cierre");
    
} else {
    if ($stmnt2->execute() == false) {
        $conexion->rollBack();
        echo("No se pudo realizar el cierre");
    } else {
        $conexion->commit();echo("Cierre realizado correctamente");
    }
    
}


} catch (PDOException $th) {
echo("error al realizar el cierre: " . $th->getMessage());
}




}


?>