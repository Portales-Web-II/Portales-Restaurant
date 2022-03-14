<?php
session_start();

$total = 0; 

echo "<h3>Carrito de compras:</h3>";
if (isset($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $indice => $arreglo) {
        echo "<hr><br>";
        $total += $arreglo["Cantidad"] * $arreglo["Precio"];
        foreach ($arreglo as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<a class='btn btn-danger aling-right'  href='Cart.php?item=$indice' >eliminar</a>";
    }
    echo "<h3>El total de la compra actual es de Lps.$total </h3>";
} else {
    echo "<script>alert('El carrito esta vacío');</script>";
?>
    <a class="btn btn-info aling-right"  href="./vistaMenu.php" >Regresar a menu</a>
<?php
}

if(isset($_REQUEST["vaciar"])){
    unset($_SESSION["carrito"]);
    header("Location:Cart.php");
   
}

if(isset($_REQUEST["item"])){
    $producto=$_REQUEST["item"];
    //$_SESSION["carrito"][$id]["ID"] = $id;
    unset($_SESSION["carrito"][$producto]);
    header("Location:Cart.php");

    // echo "<script>alert('Se elimino el producto: $producto');</script>";

}
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
                    <a href="./vistaMenu.php" class="nav_link active"> <i class='bx bx-shopping-bag nav_icon'></i> <span class="nav_name">Ventas</span> </a>
                    <a href="./vistaUsuario.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a>
                    <a href="./vistaPersona.php" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Empleado</span> </a>
                    <a href="./vistaProductos.php" class="nav_link "> <i class='bx bx-cabinet nav_icon'></i> <span class="nav_name">Inventario</span> </a>
                </div>
                </div> <a href="./vistas/login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut></span> </a>
        </nav>
    </div>
    
    <div class="container-fluid bg-light">
        <div class="col">
            <button type="submit" class="btn btn-warning aling-left" onclick="location.href='Cart.php?vaciar=true'">Vaciar Carrito</button>
            <form action="">
                
            </form>
            <button type="submit" class="btn btn-success aling-right"  onclick="location.href='./VistaFactura.php'" >Facturar</a>
        </div>

        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>