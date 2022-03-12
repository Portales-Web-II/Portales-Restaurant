<?php

    require '../configuracion/db.php';

    class Usuarios extends DB{
        private $usuario;
        private $nombreUsuario;
        private $correo;
        private $password;
        private $idPersona;
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

        public function setUsuario(){

            

        }

        public function userExist($nombreUsuario, $password){

            $pass = password_hash($_POST[$password], PASSWORD_BCRYPT);

            $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nombreUsuario = :nombreUsuario AND passeord = :password');
            $query->execute(['nombreUsuario' => $nombreUsuario, 'password' => $pass]);
            
            if($query->rowCount()){
                return true;
            }
            else{
                return false;
            }

        }

        public function setUser($nombreUsuario){
            
            $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nombreUsuario = :nombreUsuario');
            $query->execute(['nombreUsuario' => $nombreUsuario]);

            foreach($query as $currentUser){
                $this->nombreUsuario = $currentUser['nombreUsuario'];
                $this->correo = $currentUser['correo'];
                $this->password = $currentUser['password'];
            }

        }

        public function getUserName(){
            return $this->nombreUsuario;
        }

    }
?>