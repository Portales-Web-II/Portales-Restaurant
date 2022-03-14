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
        $sql = "SELECT idTipoProducto, nombre FROM tipoproducto WHERE idTipoPrincipal is NULL";
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

    public function getTpComidas()
    {
        self::setNames();
        $sql = "SELECT idTipoProducto, nombre FROM tipoproducto WHERE idTipoPrincipal = 1;";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }
    public function getTpBebidas()
    {
        self::setNames();
        $sql = "SELECT idTipoProducto, nombre FROM tipoproducto WHERE idTipoPrincipal = 2;";
        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }
}
