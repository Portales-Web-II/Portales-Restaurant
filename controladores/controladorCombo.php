<?php

function listar(){
    include_once(dirname(dirname(__FILE__)).'./modelos/modeloCombo.php');
    $modeloCombo = new Combo();
    return $modeloCombo->getCombo();
}

function listarActivos(){
    include_once(dirname(dirname(__FILE__)).'./modelos/modeloCombo.php');
    $modeloCombo = new Combo();
    return $modeloCombo->getComboActivos();
}

?>