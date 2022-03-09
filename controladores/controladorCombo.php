<?php

function listar(){
    include_once(dirname(dirname(__FILE__)).'modelos/modeloCombo.php');
    $modeloCombo = new Combo();
    return $modeloCombo->getCombo();
}
?>