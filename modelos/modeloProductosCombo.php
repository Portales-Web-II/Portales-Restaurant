<?php
//require_once('configuracion/db.php');
class ProductosCombo {
    
    private $productosCombo;
    private $db;

    public function __construct()
    {
        try {
            $this->productosCombo = array();
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getProductosCombo() {

        self::setNames();
        $sql = "SELECT idProductosCombo, idProducto, cantidad FROM productosCombo";
        foreach ($this->db->query($sql) as $res) {
            $this->productosCombo[] = $res;
        }
        return $this->productosCombo;
        $this->db = null;
    }

    public function setGuardarProductosCombo($idProducto, $cantidad) {

        self::setNames();
        $sql = "INSERT INTO productosCombo (idProducto, cantidad) ('$idProducto', '$cantidad')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setActualizarCantidad($id, $cantidad) {

        self::setNames();
        $sql = "UPDATE productosCombo SET cantidad = '$cantidad' WHERE idProductosCombo = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getBuscarIdProductosCombo($id) {

        self::setNames();
        $sql = "SELECT idProductosCombo, idProducto, cantidad FROM productosCombo WHERE idProductosCombo like '%$id%'";
        foreach ($this->db->query($sql) as $res) {
            $this->tipoProducto[] = $res;
        }
        return $this->tipoProducto;
        $this->db = null;
    }
}
?>