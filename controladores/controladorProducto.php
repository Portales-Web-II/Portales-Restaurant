<?php
include_once('modelos/modeloProducto.php');
function listar(){
    $modeloProducto = new Producto();
    return $modeloProducto->getProducto();
}
?>