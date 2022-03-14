<?php

    include('configuracion/conexionBase.php');

    session_start();
    $error='';

    if(isset($_POST['signIn'])){
        if(empty($_POST['userName']) || empty($_POST['password'])){
            $error = "<script>alert('Usuario y/o password incorrectos')</script>";
        }
        else{
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            //$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $query = mysqli_query($conexion, "SELECT nombreUsuario, contrasena FROM usuario WHERE nombreUsuario='$userName' AND contrasena='$password'");
            $contrasena='';
            $sql = "SELECT contrasena FROM usuario WHERE nombreUsuario='.$userName.'";
            if($queryPwd = $conexion->query($sql)){
                if($queryPwd->num_rows > 0){
                    $row = $queryPwd->fetch_assoc();
                    $contrasena = $row["contrasena"];
                } 
            }

            if(password_verify($password, $contrasena)){
                $stmt = $conexion->prepare($query);
                $stmt->bind_param($userName, $password);
                $stmt->execute();
                $stmt->bind_result($userName, $pass);
                $stmt->store_result();

                if($stmt->fetch()){
                                
                    $_SESSION['Usuario'] = $userName;
                    header("Location: index.php");

                }
                else{
                    $error = "<script>alert('Usuario y/o password incorrectos')</script>";
                }
            }
            else{
                $error = "<script>alert('Las Contraseñas no coinciden')</script>";
            }
            mysqli_close($conexion);
            
        }
    }

?>