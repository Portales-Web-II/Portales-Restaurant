<?php
include_once('modelos/modeloTipoProducto.php');
function listar(){
    $modeloTipoProducto = new TipoProducto();
    return $modeloTipoProducto->getTipoProducto();
}
?>