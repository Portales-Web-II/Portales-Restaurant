<?php
//require_once('configuracion/db.php');
class Combo {
    
    private $combo;
    private $db;

    public function __construct()
    {
        try {
            $this->combo = array();
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getCombo() {

        self::setNames();
        $sql = "SELECT idCombo, nombre, precio, imagen, detalle, estado, categoria, idProductosCombo FROM combo";
        foreach ($this->db->query($sql) as $res) {
            $this->combo[] = $res;
        }
        return $this->combo;
        $this->db = null;
    }

    public function getComboActivos() {

        self::setNames();
        $sql = "SELECT idCombo, nombre, precio, imagen, detalle, estado, categoria, idProductosCombo FROM combo where estado = 'activo'";
        foreach ($this->db->query($sql) as $res) {
            $this->combo[] = $res;
        }
        return $this->combo;
        $this->db = null;
    }

    // public function setGuardarCombo($nombre, $precio, $categoria, $idProductosCombo) {

    //     self::setNames();
    //     $sql = "INSERT INTO combo (nombre, precio, categoria, idProductosCombo) ('$nombre', '$precio', '$categoria', '$idProductosCombo')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setGuardarCombo($nombre, $precio, $imagen, $categoria, $idProductosCombo) {

    //     self::setNames();
    //     $sql = "INSERT INTO combo (nombre, precio, imagen, categoria, idProductosCombo) ('$nombre', '$precio', '$imagen', '$categoria', '$idProductosCombo')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setGuardarCombo($nombre, $precio, $imagen, $detalle, $categoria, $idProductosCombo) {

    //     self::setNames();
    //     $sql = "INSERT INTO combo (nombre, precio, imagen, detalle, categoria, idProductosCombo) ('$nombre', '$precio', '$imagen', '$detalle', '$categoria', '$idProductosCombo')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setActualizarCombo($id, $nombre, $precio, $detalle, $categoria) {

    //     self::setNames();
    //     $sql = "UPDATE combo SET nombre = '$nombre', precio = '$precio', detalle = '$detalle', categoria = '$categoria' WHERE idCombo = $id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function setActualizarImagen($id, $imagen) {

    //     self::setNames();
    //     $sql = "UPDATE combo SET imagen='$imagen' WHERE idCombo = $id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function setEliminarProducto($id) {

    //     self::setNames();
    //     $sql = "UPDATE combo SET estado = 'inactivo' WHERE idCombo = $id)";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function getBuscarCombo($filtro) {

    //     self::setNames();
    //     $sql = "SELECT idCombo, nombre, precio, imagen, detalle, estado, categoria, idProductosCombo FROM combo WHERE nombre like '%$filtro%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->combo[] = $res;
    //     }
    //     return $this->combo;
    //     $this->db = null;
    // }
    // public function getBuscarIdCombo($id) {

    //     self::setNames();
    //     $sql = "SELECT idCombo, nombre, precio, imagen, detalle, estado, categoria, idProductosCombo FROM producto WHERE idCombo like '%$id%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->combo[] = $res;
    //     }
    //     return $this->combo;
    //     $this->db = null;
    // }
}
?>