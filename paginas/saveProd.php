<?php
include '../configuracion/db.php';

$idProducto = $_POST['idProducto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];
$op = $_POST['op'];

if ($op = 1) {
    $sql = "INSERT INTO `dbportalesrestaurant`.`producto` (`nombre`, `precio`, `descripcion`, `idTipoProducto`) 
    VALUES ('$nombre', '$precio', '$descripcion', '6');";

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
