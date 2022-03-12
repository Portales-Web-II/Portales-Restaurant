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
    <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png"> </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
        <div class="nav_list">
          <a href="../index.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
          <a href="../vistas/vistaPersona.php" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
          <a href="#" class="nav_link active"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>

  <div class="container-fluid bg-light table-responsive">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown activo">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../vistas/vistaTiposProductos.php">Tipos productos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Combo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../vistas/vistaCombo.php">Combos</a>
            </div>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../vistas/vistaProductosCombo.php">Productos combo</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container_productos">
      <div class="titulo">
        <h1 class="display-6">Productos</h1>
      </div>

      <div class="container-table">
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
              <th scope="col">Subtipo</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $lista = listar();
            for ($i = 0; $i < count($lista); $i++) {
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
                <td>
                  <?php
                  echo $lista[$i]["precio"];
                  ?>
                </td>
                <td>
                  <?php
                  echo $lista[$i]["imagen"];
                  ?>
                </td>
                <td>
                  <?php
                  echo $lista[$i]["descripcion"];
                  ?>
                </td>
                <td>
                  <?php
                  echo $lista[$i]["estado"];
                  ?>
                </td>
                <td>
                  <?php
                  echo $lista[$i]["Tipo"];
                  ?>
                </td>
                <td>
                  <?php
                  echo $lista[$i]["SubTipo"];
                  ?>
                </td>
                <td>
                  <button type="button" class="btn btn-outline-danger">Eliminar</button>
                  <button type="button" class="btn btn-outline-warning">Modificar</button>
                </td>
              </tr>
            <?php
            };
            ?>
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-center formP">
        <form class="was-validated">
          <div class="tituloF">
            <h5>
              Producto
            </h5>

            <div class="container">
              <div class="row">
                <div class="col-sm izP">

                  <div class="form-group grupoF">

                    <label for="nombreP">Nombre</label>
                    <input type="text" class="form-control" id="nombreP" placeholder="Escriba un nombre">
                  </div>

                  <div class="form-group">

                    <label for="precioP">Precio</label>
                    <input type="text" class="form-control" id="precioP" placeholder="Escriba un precio">
                  </div>

                  <div class="form-group">
                  <div class="mb-3">
                    <label for="precioP">Imagen</label>
                    <input type="file" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                  </div>
                  </div>
                </div>

                <div class="col-sm derP">

                  <div class="form-group">
                    <label for="descrip">Descripción</label>
                    <input type="text" class="form-control" id="descrip" placeholder="Escriba una descripción">
                  </div>

                  <div class="form-group">
                    <label for="EstadoP">Estado</label>
                    <input type="text" class="form-control" id="EstadoP" placeholder="Escriba una descripción">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">

                      <label for="tipoP" class="input-group-text" for="inputGroupSelect01">Tipo</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">

                      <option selected>Selecciona</option>
                      <?php
                      $listaId = listarIdT();
                      for ($i = 0; $i < count($listaId); $i++) {
                      ?>
                        <option value="<?php $id++ ?>"><?php
                                                        echo $listaId[$i]["idTipoProducto"];
                                                        ?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <?php echo $id ?>
                      </span>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-warning btnGuardar">Guardar</button>
                </div>
              </div>
            </div>
          </div>

      </div>
      </form>
    </div>
  </div>

  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>