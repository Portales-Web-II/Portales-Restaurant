<?php
$funcion= !empty($_POST['funcion']) ? $_POST['funcion'] : null;

if( isset( $funcion ) ){
    if ( $funcion == "guardar_personas" ) { 
        guardar_personas();
    }
}

function personas_listar(){
    require_once('../modelos/modeloPersona.php');
     $modeloPersonas = new Personas();
     return $modeloPersonas->getPersonas();

}

function cargos_listar(){
    require_once('../modelos/modeloPersona.php');
     $modeloPersonas = new Personas();
     return $modeloPersonas->getCargos();

}

function guardar_personas(){
    require_once('../modelos/modeloPersona.php');
    $modeloPersonas = new Personas();
     
    $idPersona= !empty($_POST['idPersona']) ? $_POST['idPersona'] : null; 
    $nombre= !empty($_POST['nombre']) ? $_POST['nombre'] : null; 
    $apellido= !empty($_POST['apellido']) ? $_POST['apellido'] : null; 
    $telefono= !empty($_POST['telefono']) ? $_POST['telefono'] : null; 
    $idCargo= !empty($_POST['idCargo']) ? $_POST['idCargo'] : null; 
    $direccion= !empty($_POST['direccion']) ? $_POST['direccion'] : null; 
    $estado= !empty($_POST['estado']) ? $_POST['estado'] : null; 
    $accion= !empty($_POST['accion']) ? $_POST['accion'] : null; 
     
    try {
	if($accion==1){
			
            header('Content-Type: application/json');
            echo json_encode( $modeloPersonas->setGuardarPersonas($nombre, $apellido, $telefono, $idCargo, $direccion, $estado)
                    , JSON_PRETTY_PRINT);
		
        }else if($accion==2){
            
            header('Content-Type: application/json');
            echo json_encode( $modeloPersonas->setActualizarPersonas($idPersona, $nombre, $apellido, $telefono, $idCargo, $direccion, $estado)
                    , JSON_PRETTY_PRINT);
        }else if($accion==3){
            
            header('Content-Type: application/json');
            echo json_encode( $modeloPersonas->setEliminarPersonas( $idPersona )
                    , JSON_PRETTY_PRINT);

        }else{
            $msgError="Accion invalida";
        }

     

    }catch (Exception $e){
        $msgError=$e->getMessage();
    } 
    
    //return $modeloPersonas->getPersonas();

}
?>