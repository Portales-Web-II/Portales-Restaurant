<?php

function listar(){
    include_once(dirname(dirname(__FILE__)).'./modelos/modeloProductosCombo.php');
    $modeloProductosCombo = new ProductosCombo();
    return $modeloProductosCombo->getProductosCombo();
}
?>