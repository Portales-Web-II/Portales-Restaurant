<?php

    class UserSession{

        public function __construct() {
            session_start();
        }

        public function setCurrentUser($nombreUsuario)
        {
            $_SESSION['Usuario'] = $nombreUsuario;
        }

        public function getCurrentUser()
        {
            return $_SESSION['Usuario'];
        }

        public function closeSession()
        {
            session_unset();
            session_destroy();
        }

    }

?>