<?php
require_once('../controladores/controladorTipoProducto.php');
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
  <title>Portales Restaurant</title>
</head>

<body>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu">
            <div class="item"><a href=""> <i class="fas fa-home"></i>Inicio</a></div>
            <div class="item"><a href="./vistas/vistaMenu.php"> <i class="fas fa-shopping-cart"></i>Ventas</a></div>
            <div class="item"><a href=""> <i class="fas fa-user"></i>Usuarios</a></div>
            <div class="item"><a href=""> <i class="fas fa-user"></i>Empleados</a></div>
            <div class="item">
                <a class="sub-btn"> <i class="fas fa-table"></i>Inventario<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a class="item" href="#">Combos</a>
                    <a class="item" href="./vistas/vistaProductos.php">Productos</a>
                    <a class="item" href="#">Tipos Productos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor">

        <header class="header" id="header">
            <div class="header_img"> <img src="./src/imgs/logoportalesw-preview.png" alt=""> </div>
        </header>

        <main class="contenido">
            <!--Container Main start-->
            <div class="height-100 bg-light table-responsive">
    <div>
      <h4>
        Tipos Productos
      </h4>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">ID Tipo principal</th>
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
              echo $lista[$i]["idTipoProducto"];
              ?>
            </td>
            <td>
              <?php
              echo $lista[$i]["nombre"];
              ?>
            </td>
            <td>
            <?php
            echo $lista[$i]["idTipoPrincipal"];
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
        </main>

        <footer class="footer">
            <p>Portales Restaurant. Derechos de autor</p>
        </footer>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            //jquery para submenus
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery para abrir y cerrar menu
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });
            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>