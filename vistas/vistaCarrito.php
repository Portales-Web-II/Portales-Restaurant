<?php
require_once('../controladores/controladorProducto.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../styles/estilos.css">
  <script src="../js/menu.js"></script>
  <title>Portales Restaurant</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div>
            <h4>Carrito</h4>
        </div>
        <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">

            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
                <div class="nav_list">
                <a href="../index.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                    <a href="./vistaMenu.php" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
                    <a href="./vistaUsuario.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
                    <a href="./vistaPersona.php" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
                    <a href="./vistaProductos.php" class="nav_link active"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>            </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid bg-light table-responsive">

    <div class="">
        <h1>Ordenes del pedido</h1>
        <br>
    </div>

    <div class="container_productos">
      <div class="titulo">
        <h1 class="display-6">Productos</h1>
      </div>

      <div class="container-table">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Producto</th>
              <th scope="col">Precio</th>
              <th scope="col">Cantidad</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>