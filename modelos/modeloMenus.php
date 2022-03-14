<?php
class ProductosMenus{
    private $Productos;
    private $db;

    public function __construct()
    {
        try {
            $this->Productos = array();
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getProductos($TipoProductos, $SubTipoProductos)
    {
        self::setNames();
        $sql = "SELECT P.idProducto, P.nombre, P.precio, P.imagen, P.descripcion, Tp.nombre as SubTipo, 
        (SELECT Tp1.nombre as subTipo FROM tipoproducto AS Tp1 
        INNER JOIN tipoproducto as Tpp1 ON Tp1.idTipoProducto = Tpp1.idTipoPrincipal 
        where Tp1.idTipoProducto = Tp.idTipoPrincipal group by subTipo) as Tipo FROM producto AS P 
        INNER JOIN tipoproducto as Tp ON P.idTipoProducto = Tp.idTipoProducto
        where P.estado = 'activo'  and (Tp.nombre = '$SubTipoProductos' and
         (SELECT Tp1.nombre as subTipo FROM tipoproducto AS Tp1 
        INNER JOIN tipoproducto as Tpp1 ON Tp1.idTipoProducto = Tpp1.idTipoPrincipal 
        where Tp1.idTipoProducto = Tp.idTipoPrincipal group by subTipo) = '$TipoProductos');";
        foreach ($this->db->query($sql) as $res) {
            $this->Productos[] = $res;
        }
        return $this->Productos;
        $this->db = null;
    }
}
?>