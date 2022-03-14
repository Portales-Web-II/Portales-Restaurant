
<?php

    session_start();
    include '../configuracion/conexionBase.php';

    if(isset($_POST['registrar'])){

        $alert='';
        if(empty($_POST['identidad']) || empty($_POST['nomUsuario']) || empty($_POST['correo']) || empty($_POST['password']) || empty(['confirmPasswd'])){
            $alert='<p class="msg_error">Debe llenar todos los campos</p>';
        }
        else{
            $identidad = $_POST['identidad'];
            $nombre = $_POST['nomUsuario'];
            $correo = $_POST['correo'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


            $sql = 'SELECT * FROM usuario';
            $rec = mysqli_query($conexion, $sql);
            while($rec = mysqli_fetch_object($rec)){
                if($result->nombreUsuario == $nombre){
                    $verificarUsuario = 1;
                }
            }
            if($verificarUsuario){
                // if(){

                // }
            }

            if($result > 0){

                $alert='<p class="msg_error">El usuario y/o correo ya se encuantran registrados</p>';

            }
            else{

                $idPersona = mysqli_query($conexion, "SELECT idPersona FROM persona WHERE identidad = '$identidad'");

                $query_insert = mysqli_query($conexion, "INSERT INTO usuario(nombreUsuario,contrasena,correo)
                                                         VALUES ('$nombre','$correo','$password')");

                if($query_insert){
                    $alert='<p class="msg_save">Usuario creado correctamente</p>';
                }
                else{
                    $alert='<p class="msg_error">Error al crear el usuario</p>';
                }

            }

        }

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible">
    <title>Registro de Usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estilosU.css">
    
</head>
<body class="img js-fullheight" style="background-image: url(../src/imgs/food.jpg);">
        <center>
        <form action="", method="POST">
            <div class="form">
                <h1>Crea tu Cuenta</h1>
                <div class="alert"><?php echo isset($alert) ? $alert : ''?></div>
                <div class="grupo">
                    <input type="number" min="1", maxlength="13", name="identidad" id="" required><span class="barra"></span>
                    <label>Identidad</label>
                </div>
                <div class="grupo">
                    <input type="text" name="nomUsuario" id="" required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="email" name="correo" id="" required><span class="barra"></span>
                    <label>Email</label>
                </div>
                <div class="grupo">
                    <input type="password" name="password" required><span class="barra"></span>
                    <label>Password</label>
                </div>
                <div class="grupo">
                    <input type="password" name="confirmPasswd" required><span class="barra"></span>
                    <label>Confirm Password</label>
                </div>
                
                <button id="registrar" type="submit">Registarse</button> <br>

                <script>

                    function initElement(){
                        var buttonR = document.getElementById("registrar")
                        buttonR.onclick = showAlert;

                    }                   

                    function showAlert(event){

                        alert("Registro Almacenado!");

                    }

                </script>

                <!-- <p>
                    <center>
                        <h6 >Al registarse usted acepta nuestros <br> 
                                <a href="#">Terminos de Uso</a> y <a href="#">Politicas de Privacidad</a> 
                        </h6> 
                    </center>                                          
                </p> -->

            </div>
        </form>
        </center>
        

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>