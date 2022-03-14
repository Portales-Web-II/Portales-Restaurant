<?php

    require './configuracion/conexionBase.php';

    session_start();

    $userExist = $_SESSION['Usuario'];

    $query = "SELECT nombreUsuario FROM usuario WHERE nombreUsuario='$userExist'";
    $session_sql = mysqli_query($conexion, $query);

    $row = mysqli_fetch_assoc($session_sql);
    $loginSession = $row['nombreUsuario'];

    // class UserSession{

    //     public function __construct() {
    //         session_start();
    //     }

    //     public function setCurrentUser($nombreUsuario)
    //     {
    //         $_SESSION['Usuario'] = $nombreUsuario;
    //     }

    //     public function getCurrentUser()
    //     {
    //         return $_SESSION['Usuario'];
    //     }

    //     public function closeSession()
    //     {
    //         session_unset();
    //         session_destroy();
    //     }

    // }

?>