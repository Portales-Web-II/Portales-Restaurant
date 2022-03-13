<?php
include('../controladores/controladorCombo.php');
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
            <h4>Menu Combos</h4>
        </div>
        <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">

            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Portales Restaurant</span> </a>
                <div class="nav_list">
                    <a href="../index.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                    <a href="./vistaMenu.php" class="nav_link active"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
                    <a href="./vistaUsuario.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
                    <a href="./vistaPersona.php" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
                    <a href="./vistaProductos.php" class="nav_link"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container-fluid bg-light">
        <!-- <div class="row g-4 justify-content-md-center"> -->
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-md-center">
            <?php
            $lista = listarActivos();
            for ($i = 0; $i < count($lista); $i++) {
            ?>
                <div class="col">
                    <div class="card h-100 text-center">
                        <img src="../src/imgs/Almuerzos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"><?php echo $lista[$i]["nombre"]; ?></h5>
                            <p class="card-text"><?php echo $lista[$i]["detalle"]; ?></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-capitalize">Para <?php echo $lista[$i]["categoria"]; ?></li>
                                <li class="list-group-item fw-bolder"> Lps. <?php echo $lista[$i]["precio"]; ?></li>
                            </ul>
                            <a href="#" class="btn btn-warning">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            <?php
            };
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>