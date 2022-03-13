<?php
function MenuMostrar($TipoProductos, $SubTipoProductos){
    require_once('../modelos/modeloMenus.php');
     $modeloMenus = new ProductosMenus();
     return $modeloMenus->getProductos($TipoProductos, $SubTipoProductos);
}
?>