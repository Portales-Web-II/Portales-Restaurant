<?php

    function listar(){
        require_once('../modelos/modeloUsuarios.php');
        $modeloUsuario = new Usuarios();
        return $modeloUsuario->getUsuario();

    }
    
?>