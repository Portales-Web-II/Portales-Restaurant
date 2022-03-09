<?php

function listar(){
    include_once(dirname(dirname(__FILE__)).'modelos/modeloTipoProducto.php');
    $modeloTipoProducto = new TipoProducto();
    return $modeloTipoProducto->getTipoProducto();
}
?>