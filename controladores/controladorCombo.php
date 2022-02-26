<?php
include_once('modelos/modeloCombo.php');
function listar(){
    $modeloCombo = new Combo();
    return $modeloCombo->getCombo();
}
?>