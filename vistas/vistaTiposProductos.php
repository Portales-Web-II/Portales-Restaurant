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
                    <a href="./vistaMenu.php" class="nav_link"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
                    <a href="./vistaUsuario.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
                    <a href="./vistaPersona.php" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
                    <a href="./vistaProductos.php" class="nav_link active"> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
                </div>
                </div> <a href="./vistas/login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut></span> </a>
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
                            Tipos productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../vistas/vistaProductos.php">Productos</a>
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

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="titulo">
                            <h1 class="display-6">Tipos principales</h1>
                        </div>
                        <div class="container-table">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $listaTp = listarTipoP();
                                    for ($r = 0; $r < count($listaTp); $r++) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo $listaTp[$r]['idTipoProducto'];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                echo $listaTp[$r]['nombre'];
                                                ?>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal_modificarTp" data-idTp="<?php $idTpA = $listaTp[$r]['idTipoProducto']; ?>">Modificar</button>
                                            </td>
                                        </tr>
                                    <?php
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <div class="titulo">
                            <h1 class="display-6">Subtipos</h1>
                        </div>
                        <div class="container-table">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Subtipo</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $lista = listarTp();
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
                                                echo $lista[$i]["tipo"];
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                echo $lista[$i]["subTipo"];
                                                ?>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-outline-warning">Modificar</button>
                                            </td>
                                        </tr>
                                    <?php
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm formTp">
                        <form action="" method="post" class="was-validated">
                            <div class="mx-auto tituloF">
                                <h5>
                                    Tipo Principal
                                </h5>
                                <div class="form-group grupoF">
                                    <label for="nombreTp" class="form-label">Nombre</label>
                                    <input type="text" value="" class="form-control is-invalid" id="nombreTp" name="nombreTp" placeholder="Escriba un nombre" onkeypress="return isNumericKey(event)" required>
                                </div>
                                <button type="submit" name="save" id="btnGuardarTp" class="btn btn-warning btnGuardar" value="Save to database">Guardar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm formSt">
                        <form action="" method="post" class="was-validated">
                            <div class="mx-auto tituloF">
                                <h5>
                                    Subtipos
                                </h5>
                                <div class="form-group grupoF">
                                    <label for="nombreSt" class="form-label">Nombre</label>
                                    <input type="text" value="" class="form-control is-invalid" id="nombreSt" name="nombreSt" placeholder="Escriba un nombre" onkeypress="return isNumericKey(event)" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">

                                        <label for="OpTipoP" class="input-group-text" for="inputGroupSelect01">Tipo principal</label>
                                    </div>
                                    <select name="OpTipoP" id="OpTipoP" class="form-select custom-select" required aria-label="select example">

                                        <option value="">Selecciona</option>
                                        <?php
                                        $tiposP = listarTipoP();
                                        for ($i = 0; $i < count($tiposP); $i++) {
                                        ?>
                                            <option value="<?php echo $tiposP[$i]["idTipoProducto"]; ?>"><?php
                                                                                                            echo $tiposP[$i]["nombre"];
                                                                                                            ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="button" name="save" id="btnGuardarSt" class="btn btn-warning btnGuardar" value="Save to database">Guardar</button>
                            </div>
                            <?php
                            include('../modals/modalGuardar.php');
                            ?>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnGuardarTp').on('click', function() {
            var nombre = $('#nombreTp').val();
            var op = 1;
            if (nombre != "") {
                $.ajax({
                    type: "POST",
                    url: "../paginas/saveTp.php",
                    data: {
                        nombre: nombre,
                        op: op
                    },
                    cache: false,
                    dataType: 'json',
                    success: function() {
                        alert("Registro guardado");
                    }
                })
            } else {
                alert("Ingrese un nombre");
            }
        })
    });
    $(document).ready(function() {
        $('#btnModificarTp').on('click', function() {
            var idTipoProducto = $(<?php echo $idTpA; ?>);
            var nombre = $('#nombreTpA').val();
            var op = 2;
            if (nombre != "") {
                $.ajax({
                    type: "POST",
                    url: "../paginas/saveTp.php",
                    data: {
                        idTipoProducto: idTipoProducto,
                        nombre: nombre,
                        op: op
                    },
                    cache: false,
                    dataType: 'json',
                    success: function() {
                        alert("Registro actualizado");
                    }
                })
            } else {
                alert("Ingrese un nombre");
            }
        })
    });

    $(document).ready(function() {
        $('#btnGuardarSt').on('click', function() {
            $('select#OpTipoP').on('change', function(idTipoPrincipal) {
                var idTipoPrincipal = $(this).val();
            });
            var nombre = $('#nombreSt').val();
            var op = 1;
            if (nombre != "" || idTipoPrincipal != "") {
                $.ajax({
                    type: "POST",
                    url: "../paginas/saveSt.php",
                    data: {
                        nombre: nombre,
                        idTipoPrincipal: idTipoPrincipal,
                        op: op
                    },
                    cache: false,
                    dataType: 'json',
                    success: function() {
                        alert("Registro guardado");
                    }
                })
            } else {
                alert("Ingrese un nombre y tipo");
            }
        })
    });
</script>