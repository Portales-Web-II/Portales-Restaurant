<?php
require_once('../controladores/controladorProducto.php');
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
            <h4>Productos</h4>
        </div>
        <div class="header_img"> <img src="../src/imgs/logoportalesw-preview.png"> </div>
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

    <div class="height-100 bg-light">

        <div class="row g-2">
            <div class="col-sm-4">
                <div class="card text-center" style="width: auto;">
                    <div class="container-sm">
                        <img src="../src/imgs/desayuno_saludable_1.jpeg" class="card-img-top active img-fluid" style="height:350px; width:auto;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Desayunos</h5>
                        <p class="card-text">Diversos tipos de Desayunos tipicos, rapidos, sencillos entre otros más</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: auto;">
                    <div class="container-sm">
                        <img src="../src/imgs/Almuerzos.jpg" class="card-img-top active img-fluid" style="height:350px; width:auto" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Almuerzos</h5>
                        <p class="card-text">Diversos tipos de Almuerzos tipicos, rapidos, sencillos entre otros más.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: auto;">
                    <div class="container-sm">
                        <img src="../src/imgs/cenas.jpg" class="card-img-top active img-fluid" style="height:350px; width:auto" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cenas</h5>
                        <p class="card-text">Diversos tipos de Cenas tipicos, rapidos, sencillos entre otros más.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center" style="width: auto;">
                    <div class="container-sm">
                        <img src="../src/imgs/Combos.jpg" class="card-img-top active img-fluid" style="height:350px; width:auto" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Combos</h5>
                        <p class="card-text">Diversos tipos de Combos tipicos, rapidos, sencillos entre otros más.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: auto;">
                    <div class="container-sm">
                        <img src="../src/imgs/bebidas.jpg" class="card-img-top active img-fluid" style="height:350px; width:auto" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bebidas</h5>
                        <p class="card-text">Diversos tipos de bebidas tipicas, frías, calientes entre otros más.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>