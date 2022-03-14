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
  <script src="../js/validaciones.js"></script>
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
        <form action="" method="post" enctype="multipart/form-data" class="was-validated">

          <div class="tituloF">
            <h5>
              Producto
            </h5>

            <div class="container">
              <div class="row">
                <div class="col-sm izP">

                  <div class="form-group grupoF">

                    <label for="nombreP" class="form-label">Nombre</label>
                    <input type="text" class="form-control is-invalid" id="nombreP" name="nombreP" placeholder="Escriba un nombre" onkeypress="return isNumericKey(event)" required>
                  </div>

                  <div class="form-group">

                    <label for="nombreP" class="form-label">Precio</label>
                    <input type="text" class="form-control is-invalid" id="precioP" name="precioP" placeholder="Escriba un precio" onkeypress="return isNumberKey(event)" required>
                  </div>

                  <div class="photo">
                    <label for="">Imagen del producto</label>
                    <div class="prevPhoto">
                      <span class="delPhoto notBlock">X</span>
                      <label for="foto"></label>
                    </div>
                    <div class="upimg">
                      <input type="file" name="foto" id="foto">
                    </div>
                    <div id="form_alert"></div>
                  </div>

                </div>

                <div class="col-sm derP">

                  <div class="form-group">
                    <label for="descrip">Descripción</label>
                    <textarea class="form-control" id="descrip" name="descrip" placeholder="Ingrese una descripción" onkeypress="return isNumericKey(event)"></textarea>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">

                      <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                    </div>
                    <select id="tipoP" name="tipoP" class="form-select custom-select" aria-label="select example">

                      <option value="">Selecciona</option>
                      <?php
                      $listaId = listarTipoP();
                      for ($i = 0; $i < count($listaId); $i++) {
                      ?>
                        <option value="<?php echo $listaId[$i]["idTipoProducto"]; ?>"><?php
                                                                                      echo $listaId[$i]["nombre"];
                                                                                      ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">

                      <label for="subT" class="input-group-text" for="inputGroupSelect01">Subtipo</label>
                    </div>
                    <select id="subT" class="form-select custom-select" aria-label="select example">

                      <option value="">Selecciona</option>
                      <?php
                      if (isset($_POST["tipoP"])) {
                        $Tp = $_POST["tipoP"];

                        if ($Tp = 1) {
                          $listaIdC = listarTpC();
                          for ($i = 0; $i < count($listaIdC); $i++) {
                      ?>
                            <option value="<?php echo $listaIdC[$i]["idTipoProducto"]; ?>"><?php
                                                                                            echo $listaIdC[$i]["nombre"];
                                                                                            ?></option>
                          <?php
                          }
                          ?>
                          <?php
                        } elseif ($Tp = 2) {
                          $listaIdB = listarTpB();
                          for ($i = 0; $i < count($listaIdB); $i++) {
                          ?>
                            <option value="<?php echo $listaIdB[$i]["idTipoProducto"]; ?>"><?php
                                                                                            echo $listaIdB[$i]["nombre"];
                                                                                            ?></option>
                      <?php
                          }
                        }
                      }
                      ?>


                    </select>
                  </div>
                  <button type="button" name="save" id="btnGuardarP" class="btn btn-warning btnGuardar" value="Save to database">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    // $('#foto').on("change", function() {
    //   var uploadFoto = document.getElementById("foto").value;
    //   var foto = document.getElementById("foto").files;
    //   var nav = window.URL || window.webkitURL;

    //   if (uploadFoto != '') {
    //     var type = foto[0].type;
    //     var name = foto[0].name;
    //     if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
    //       contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';

    //       $("#img").remove();
    //       $(".delPhoto").addClass('notBlock');
    //       $("#foto").val('');
    //       return false;
    //     } else {
    //       contactAlert.innerHTML = '';
    //       $("#img").remove();
    //       $(".delPhoto").removeClass('notBlock');
    //       var objeto_url = nav.createObjectURL(this.files[0]);
    //       $(".prevPhoto").append("<img id='img' src=" + objeto_url + ">");
    //       $(".unpimg label").remove();
    //     }
    //   } else {
    //     alert("No seleccionó foto");
    //     $("#img").remove();
    //   }
    // });

    $('.delPhoto').click(function() {
      $('#foto').val('');
      $(".delPhoto").addClass('notBlock');
      $("#img").remove();
    });

    $('#btnGuardarP').on('click', function() {
      var nombre = $('#nombreP').val();
      var precio = $('#precioP').val();
      var descripcion = $('#descrip').val();

      var op = 1;
      if (nombre != "" || precio != "") {
        $.ajax({
          type: "POST",
          url: "../paginas/saveProd.php",
          data: {
            nombre: nombre,
            precio: precio,
            descripcion: descripcion,
            op: op
          },
          cache: false,
          dataType: 'json',
          success: function() {
            alert("Registro guardado");
          }
        })
      } else {
        alert("Ingrese un nombre y/o precio");
      }
    })
  });
</script>