<?php
require_once '../bd/ConectaBD.php';

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
            $this->db = new PDO('mysql:host=localhost;dbname=dbportalesrestaurant', "root", "Privado0721");
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
        $sql = "SELECT p.idPersona, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion
            FROM persona p 
            join cargos c on c.idCargos = p.idCargo";
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

     public function setGuardarPersonas($nombre, $apellido, $telefono, $idCargo, $direccion) {

        self::setNames();
         //$sql = "INSERT INTO producto (nombre, precio, idTipoProducto) ('$nombre', '$precio', '$idTipoProducto')";
        $sql = "INSERT INTO persona( nombre, apellido, telefono, idCargo, direccion, deleted_at) 
            VALUES ('$nombre','$apellido', '$telefono', '$idCargo', '$direccion', now() )";
        $result = $this->db->query($sql);
         
        
        
        
         if ($result) {
            $sql_id = "select LAST_INSERT_ID() as id";        
        
            foreach ($this->db->query($sql_id) as $res) {
                $this->id = $res['id'];
            }

            $sql_personas = "select * from (
            SELECT p.idPersona, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion
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

    public function setActualizarPersonas($idPersona, $nombre, $apellido, $telefono, $idCargo, $direccion) {

         self::setNames();
         $sql = "UPDATE persona SET nombre='$nombre',apellido='$apellido',telefono='$telefono',idCargo='$idCargo',direccion='$direccion'
            WHERE idPersona = '$idPersona' ";
         $result = $this->db->query($sql);                 

         if ($result) {
            $sql_personas = "select * from (
            SELECT p.idPersona, p.nombre, p.apellido, p.telefono, p.idCargo, c.nombreCargo, p.direccion
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
         $sql = "DELETE FROM persona WHERE idPersona = '$idPersona'";
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