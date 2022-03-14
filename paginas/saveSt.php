<?php
include '../configuracion/db.php';

$idTipoProducto = $_POST['idTipoProducto'];
$nombre = $_POST['nombre'];
$idTipoPrincipal = $_POST['idTipoPrincipal'];
$op = $_POST['op'];

if ($op = 1) {
    $sql = "INSERT INTO `dbportalesrestaurant`.`tipoproducto` (`nombre`, `idTipoPrincipal`) 
    VALUES ('$nombre', '$idTipoPrincipal');";

    if (mysqli_query($conexion, $sql)) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
} else if ($op = 2){
    
}else{
    echo 'Error';
}


mysqli_close($conexion);
?>