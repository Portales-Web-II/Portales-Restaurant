<?php

function listar($TipoProductos, $SubTipoProductos){
    require_once('../modelos/modeloMenus.php');
     $modeloMenus = new ProductosMenus();
     return $modeloMenus->getProductos($TipoProductos, $SubTipoProductos);

}
?>