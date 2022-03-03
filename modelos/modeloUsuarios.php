<?php
    class Usuarios{
        private $usuario;
        private $db;

        public function __construct()
        {
            try {
                $this->usuario = array();
                $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getUsuario() {

            self::setNames();
            $sql = "SELECT idUsuario, nombreUsuario, correo, estado FROM usuario";
            foreach ($this->db->query($sql) as $res) {
                $this->usuario[] = $res;
            }
            return $this->usuario;
            $this->db = null;
        }

    }
?>