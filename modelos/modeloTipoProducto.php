<?php
//require_once('configuracion/db.php');
class TipoProducto {
    
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

    public function getTipoProducto() {

        self::setNames();
        $sql = "SELECT idTipoProducto, nombre, idTipoPrincipal FROM tipoProducto";
        foreach ($this->db->query($sql) as $res) {
            $this->tipoProducto[] = $res;
        }
        return $this->tipoProducto;
        $this->db = null;
    }

    // public function setGuardarTipoProducto($nombre) {

    //     self::setNames();
    //     $sql = "INSERT INTO tipoProducto (nombre) ('$nombre')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setGuardarTipoProducto($nombre, $idTipoPrincipal) {

    //     self::setNames();
    //     $sql = "INSERT INTO tipoProducto (nombre, idTipoPrincipal) ('$nombre', '$idTipoPrincipal')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setActualizarTipoProducto($id, $nombre, $idTipoPrincipal) {

    //     self::setNames();
    //     $sql = "UPDATE tipoProducto SET nombre = '$nombre', idTipoPrincipal = '$idTipoPrincipal' WHERE idTipoProducto = $id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setEliminarTipoProducto($id) {

    //     self::setNames();
    //     $sql = "DELETE FROM tipoProducto WHERE idTipoProducto = $id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    
    // public function getBuscarTipoProducto($filtro) {

    //     self::setNames();
    //     $sql = "SELECT nombre, idTipoPrincipal FROM tipoProducto WHERE nombre like '%$filtro%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->tipoProducto[] = $res;
    //     }
    //     return $this->tipoProducto;
    //     $this->db = null;
    // }

    // public function getBuscarIdTipoProducto($id) {

    //     self::setNames();
    //     $sql = "SELECT nombre, idTipoPrincipal FROM tipoProducto WHERE idTipoProducto like '%$id%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->tipoProducto[] = $res;
    //     }
    //     return $this->tipoProducto;
    //     $this->db = null;
    // }
}
?>