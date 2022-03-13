<?php

class Personas{

    private $personas;
    private $cargos;
    private $db;
    private $id;

    public function __construct(){
        try {
            $this->personas = array();
            $this->cargos = array();
            $this->id = null;
            $this->db = new PDO('mysql:host=3.93.152.196;dbname=dbportalesrestaurant', "portales", "Portales123@");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    private function setNames(){
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getPersonas(){
        self::setNames();
        $sql = "SELECT p.idPersona, p.identidad, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion,
            p.estado
            FROM persona p 
            join cargos c on c.idCargos = p.idCargo
            ";
        foreach ($this->db->query($sql) as $res) {
            $this->personas[] = $res;
        }
        return $this->personas;
        $this->db = null;
    }
    
    public function getCargos(){
        self::setNames();
        $sql = "SELECT c.idCargos, c.nombreCargo FROM cargos c
            order by idCargos asc";
        foreach ($this->db->query($sql) as $res) {
            $this->cargos[] = $res;
        }
        return $this->cargos;
        $this->db = null;
    }

     public function setGuardarPersonas($identidad, $nombre, $apellido, $telefono, $idCargo, $direccion, $estado) {

        self::setNames();
         //$sql = "INSERT INTO producto (identidad, nombre, precio, idTipoProducto) ('$nombre', '$precio', '$idTipoProducto')";
        $sql = "INSERT INTO persona(identidad, nombre, apellido, telefono, idCargo, direccion, estado) 
            VALUES ('$identidad','$nombre','$apellido', '$telefono', '$idCargo', '$direccion', '$estado' )";
        $result = $this->db->query($sql);
         
        
        
        
         if ($result) {
            $sql_id = "select LAST_INSERT_ID() as id";        
        
            foreach ($this->db->query($sql_id) as $res) {
                $this->id = $res['id'];
            }

            $sql_personas = "select * from (
            SELECT p.idPersona, p.identidad, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion, p.estado
            FROM persona p 
            join cargos c on c.idCargos = p.idCargo            
            )x
            where x.idPersona = '$this->id'";

            foreach ($this->db->query($sql_personas) as $res) {
                $this->personas[] = $res;
            }
        
            return $this->personas;
            $this->db = null;
         } else {
             return false;
         }
    }

    public function setActualizarPersonas($idPersona, $identidad, $nombre, $apellido, $telefono, $idCargo, $direccion, $estado) {

         self::setNames();
         $sql = "UPDATE persona SET identidad='$identidad', nombre='$nombre', apellido='$apellido',telefono='$telefono',idCargo='$idCargo',direccion='$direccion', estado='$estado'
            WHERE idPersona = '$idPersona' ";
         $result = $this->db->query($sql);                 

         if ($result) {
            $sql_personas = "select * from (
            SELECT p.idPersona, p.identidad, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion, p.estado
            FROM persona p 
            join cargos c on c.idCargos = p.idCargo            
            )x
            where x.idPersona = '$idPersona'";

            foreach ($this->db->query($sql_personas) as $res) {
                $this->personas[] = $res;
            }
        
            return $this->personas;
            $this->db = null;
        } else {
             return false;
         }
    }

    public function setEliminarPersonas( $idPersona ) {

         self::setNames();
         $sql = "update persona set estado = 'inactivo' WHERE idPersona = '$idPersona'";
         $result = $this->db->query($sql);

         if ($result) {
             return true;
         } else {
             return false;
         }
    }
 
    // public function getBuscarProducto($filtro) {

    //     self::setNames();
    //     $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE nombre like '%$filtro%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->producto[] = $res;
    //     }
    //     return $this->producto;
    //     $this->db = null;
    // }
    // public function getBuscarIdPersonas($id) {

    //     self::setNames();
    //     $sql = "SELECT nombre, precio, imagen, descripcion, estado FROM producto WHERE idProducto like '%$id%'";
    //     foreach ($this->db->query($sql) as $res) {
    //         $this->producto[] = $res;
    //     }
    //     return $this->producto;
    //     $this->db = null;
    // }
}