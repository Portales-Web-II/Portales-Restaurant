<?php

function IDPedido(){
    require_once('../modelos/modeloPedido.php');
     $modeloMenus = new Pedidos();
     return $modeloMenus->getIdProductosPedido();

}
?>