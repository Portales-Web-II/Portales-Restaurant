<?php

class Producto
{
    private $producto;
    private $db;

    public function __construct()
    {
        try {
            $this->producto = array();
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function setNames()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getTipoProducto()
    {

        self::setNames();
        $sql = "SELECT Tp.idTipoProducto, Tp.nombre as tipo, Tpp.nombre as subTipo FROM tipoproducto AS Tp
        INNER JOIN tipoproducto as Tpp ON Tp.idTipoProducto = Tpp.idTipoPrincipal";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function getTiposPrincipales()
    {

        self::setNames();
        $sql = "SELECT nombre FROM tipoproducto WHERE idTipoPrincipal is NULL";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function getIdTipoP()
    {

        self::setNames();
        $sql = "SELECT idTipoProducto FROM tipoproducto WHERE idTipoPrincipal is NULL";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function getTTp()
    {

        self::setNames();
        $sql = "SELECT Tp.nombre as tipo, Tpp.nombre as subTipo FROM tipoproducto AS Tp
        INNER JOIN tipoproducto as Tpp ON Tp.idTipoProducto = Tpp.idTipoPrincipal;";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function getProducto()
    {
        self::setNames();
        $sql = "SELECT P.idProducto, P.nombre, P.precio, P.imagen, P.descripcion, P.estado,
        (SELECT Tp1.nombre as subTipo FROM tipoproducto AS Tp1
        INNER JOIN tipoproducto as Tpp1 ON Tp1.idTipoProducto = Tpp1.idTipoPrincipal 
        where Tp1.idTipoProducto = Tp.idTipoPrincipal group by subTipo) as Tipo, Tp.nombre as SubTipo FROM producto AS P 
        INNER JOIN tipoproducto as Tp ON P.idTipoProducto = Tp.idTipoProducto";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
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

    public function setGuardarProducto($nombre, $precio, $idTipoProducto)
    {

        self::setNames();
        $sql = "INSERT INTO producto (nombre, precio, idTipoProducto) ('$nombre', '$precio', '$idTipoProducto')";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    // public function setGuardarProducto($nombre, $precio, $imagen, $descripcion, $estado, $idTipoProducto) {

    //     self::setNames();
    //     $sql = "INSERT INTO producto (nombre, precio, imagen, descripcion, estado, idTipoProducto) ('$nombre', '$precio', '$imagen', '$descripcion', '$estado', '$idTipoProducto')";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function setActualizarProducto($id, $nombre, $precio, $descripcion) {

    //     self::setNames();
    //     $sql = "UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion' WHERE idProducto = $id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function setActualizarImagen($id, $imagen) {

    //     self::setNames();
    //     $sql = "UPDATE producto SET imagen='$imagen' WHERE id=$id";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function setEliminarProducto($id) {

    //     self::setNames();
    //     $sql = "UPDATE producto SET estado = 'inactivo' WHERE idProducto = $id)";
    //     $result = $this->db->query($sql);

    //     if ($result) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // public function getBuscarProducto($filtro) {

    //     self::setNames();
    //     $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE nombre like '%$filtro%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->producto[] = $res;
    //     }
    //     return $this->producto;
    //     $this->db = null;
    // }
    // public function getBuscarIdProducto($id) {

    //     self::setNames();
    //     $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE idProducto like '%$id%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->producto[] = $res;
    //     }
    //     return $this->producto;
    //     $this->db = null;
    // }
}
