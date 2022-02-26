<?php
//require_once('configuracion/db.php');
class Producto {
    
    private $producto;
    private $db;

    public function __construct() {
        $this->producto = array();
        $this->db = new PDO('mysql:host=localhost;dbname=dbportalesrestaurant', "root", "Privado0721");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getProducto() {

        self::setNames();
        $sql = "SELECT idProducto, nombre, precio, imagen, descripcion, estado, idTipoProducto FROM producto";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function setGuardarProducto($nombre, $precio, $idTipoProducto) {

        self::setNames();
        $sql = "INSERT INTO producto (nombre, precio, idTipoProducto) ('$nombre', '$precio', '$idTipoProducto')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setGuardarProducto($nombre, $precio, $imagen, $descripcion, $estado, $idTipoProducto) {

        self::setNames();
        $sql = "INSERT INTO producto (nombre, precio, imagen, descripcion, estado, idTipoProducto) ('$nombre', '$precio', '$imagen', '$descripcion', '$estado', '$idTipoProducto')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setActualizarProducto($id, $nombre, $precio, $descripcion) {

        self::setNames();
        $sql = "UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion' WHERE idProducto = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function setActualizarImagen($id, $imagen) {

        self::setNames();
        $sql = "UPDATE producto SET imagen='$imagen' WHERE id=$id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function setEliminarProducto($id) {

        self::setNames();
        $sql = "UPDATE producto SET estado = 'inactivo' WHERE idProducto = $id)";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getBuscarProducto($filtro) {

        self::setNames();
        $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE nombre like '%$filtro%'";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }
    public function getBuscarIdProducto($id) {

        self::setNames();
        $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE idProducto like '%$id%'";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }
}
?>