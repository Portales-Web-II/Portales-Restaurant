<?php

    $host     = '3.93.152.196';
    $db       = 'dbportalesrestaurant';
    $user     = 'portales';
    $password = 'Portales123@';
    $charset  = 'utf8';       

    $conexion = @mysqli_connect($host, $user, $password, $db);

    if(!$conexion){
        echo "Error de conexion";
    }

?>