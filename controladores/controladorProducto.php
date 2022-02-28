<?php

function listar(){
    include_once(dirname(dirname(__FILE__)).'modelos/modeloProducto.php');
    $modeloProducto = new Producto();
    return $modeloProducto->getProducto();
}
?>