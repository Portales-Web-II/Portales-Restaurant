<?php

function listar(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getProducto();

}
?>