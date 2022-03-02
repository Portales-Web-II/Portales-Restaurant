<?php

function listar(){
    require('../modelos/modeloProducto.php');
    $modeloProducto = new Producto();
    return $modeloProducto->getProducto();
}
?>