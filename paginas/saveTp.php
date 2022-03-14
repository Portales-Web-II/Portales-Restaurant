<?php
include '../configuracion/db.php';

$idTipoProducto = $_POST['idTipoProducto'];
$nombre = $_POST['nombre'];
$op = $_POST['op'];

if ($op = 1) {
    $sql = "INSERT INTO tipoproducto (`nombre`) 
    VALUES ('$nombre')";

    if (mysqli_query($conexion, $sql)) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
} else if ($op = 2){
    $sql = "UPDATE tipoproducto
    SET `nombre` = ('$nombre') WHERE (`idTipoProducto` = '$idTipoProducto')";

    if (mysqli_query($conexion, $sql)) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
}else{
    echo 'Error';
}


mysqli_close($conexion);
?>