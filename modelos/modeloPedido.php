<?php

class Pedidos{
    
    
    
    public function getIdProductosPedido()
    {

    $host     = '3.93.152.196';
    $db       = 'dbportalesrestaurant';
    $user     = 'portales';
    $password = 'Portales123@';
    $charset  = 'utf8';

    $conexion = @mysqli_connect($host, $user, $password, $db);

    if(!$conexion){
        echo "Error de conexion";
    }


        $sql = "select max(idProductosPedido) as id from productospedido;";
        $resultado = mysqli_query($conexion, $sql) or die ('Error: '. mysqli_error($conexion));
        if($queryId = $conexion->query($resultado)){
            if($queryId->num_rows > 0){
                $row = $queryId->fetch_assoc();
                $id = $row["id"];
            }
        }

        return $id;
        $id = null;
    }
}
?>