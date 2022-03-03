<?php
    require_once('../controladores/controladorUsuario.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../styles/estilos.css">
  <script src="../js/menu.js"></script>
  <title>Portales Restaurant</title>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div>
      <h4>
        Usuarios
      </h4>
    </div>
    <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png" > </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
        <div class="nav_list">
          <a href="../index.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
          <a href="#" class="nav_link active"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>
  <div class="height-100 bg-light table-responsive">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Estado</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $listaUsuarios = listar();
        for ($i = 0; $i < count($listaUsuarios); $i++) {
        ?>
          <tr>
            <td>
              <?php
              echo $listaUsuarios[$i]["idUsuario"];
              ?>
            </td>
            <td>
              <?php
              echo $listaUsuarios[$i]["nombreUsuario"];
              ?>
            </td>
            <td>
            <?php
            echo $listaUsuarios[$i]["correo"];
            ?>
            </td>
            <td>
            <?php
            echo $listaUsuarios[$i]["estado"];
            ?>
            </td>
            <td>
              <button type="button" class="btn btn-outline-warning">Eliminar</button>
              <button type="button" class="btn btn-outline-warning">Modificar</button>
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