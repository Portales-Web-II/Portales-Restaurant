<?php
class Usuarios{
    private $tipoProducto;
    private $db;

    public function __construct()
    {
        try {
            $this->tipoProducto = array();
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }
}
?>