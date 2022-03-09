<?php
function listarTp(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getTipoProducto();

}

function listarTipoP(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getTiposPrincipales();

}

function listarIdT(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getIdTipoP();

}

function listarTTp(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getTTp();

}
function listar(){
    require_once('../modelos/modeloProducto.php');
     $modeloProducto = new Producto();
     return $modeloProducto->getProducto();

}
?>