<?php
require_once('../controladores/controladorProducto.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/estilos.css">
    <script src="../js/menu.js"></script>
    <title>Portales Restaurant</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
                <div class="nav_list"> 
                    <a href="../Plantilla.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a> 
                    <a href="#" class="nav_link active"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a> 
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <div class="height-100 bg-light">
      <div>
      <h4>
        Productos
        <?php
         $lista=listar();
         print_r ($lista);

        ?>
        <?php
 
 echo "¡Hola mundo! <br>";
 
 for($i = 0; $i < 10; $i++)
  {
   echo "Línea número: ".$i."<br>";
  }
 ?>
        </h4>
      </div>
        
        
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Imagen</th>
              <th scope="col">Descripción</th>
              <th scope="col">Estado</th>
              <th scope="col">Tipo</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $lista=listar();
            print_r ($lista);
            for($i=0;$i<count($lista);$i++)
            {
            ?>
            <tr>
              <td>
                <?php
                echo $lista[$i]["idProducto"];
                ?>
              </td>
              <td>
              <?php
                echo $lista[$i]["nombre"];
                ?>
              </td>
              <?php
                echo $lista[$i]["precio"];
                ?>
              </td>
              <?php
                echo $lista[$i]["imagen"];
                ?>
              </td>
              <?php
                echo $lista[$i]["descripcion"];
                ?>
              </td>
              <?php
                echo $lista[$i]["estado"];
                ?>
              </td>
              <?php
                echo $lista[$i]["idTipoProducto"];
                ?>
              </td>
              <td>
                <button type="button" class="btn btn-outline-warning">Eliminar</button>

              </td>
            </tr>
            <?php
            };
            ?>
          </tbody>
        </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>