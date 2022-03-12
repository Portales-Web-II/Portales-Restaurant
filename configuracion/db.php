<?php

    class DB{
        private $host;
        private $db;
        private $user;
        private $password;        
        private $charset;

        public function __construct()
        {
            $this->host       = '3.93.152.196';
            $this->db         = 'dbportalesrestaurant';
            $this->user       = 'portales';
            $this->password   = 'Portales123@';
            $this->charset    = 'utf8';

        }

        public function connect(){

            try {
                
                $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";user=" . $this->user . ";password=" . $this->password;
                $options = [
                    
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => false,

                ];

                $pdo = new PDO($conexion, $this->user, $this->password, $this->$options);

                return $pdo;

            } catch (PDOException $e) {
                
                print_r('Error de Conexión: ' . $e->getMessage());

            }

        }

    }

?>