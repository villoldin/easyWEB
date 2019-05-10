<?php

    session_start();

    if (isset($_POST['send'])) {
   
        if (empty($_POST['usuario']) && empty($_POST['pass'])) {
            $error = "Usuario y contraseña no pueden estar vacios";
            header("Location:../../iniciarSesion.php?error=".urlencode($error)."");
        } else if (empty($_POST['usuario'])) {
            $error = "Usuario vacio";
            header("Location:../../iniciarSesion.php?error=".urlencode($error)."");
        } else if (empty($_POST['pass'])) {
            $error = "Contraseña vacia";
            header("Location:../../iniciarSesion.php?error=".urlencode($error)."");
        } else {
            // Los datos se han enviado correctamente

            require "./clase_iniciarSesion.php";

            $objetoLogin = new Login();

            $existeUsuario = $objetoLogin->existeUsuario($_POST['usuario'], $_POST['pass']);
    
            
            if ($existeUsuario === true) {

                // Si existe usuario crearemos una cookie con el usuario                
                    
                session_start();

                $esAdmin = $objetoLogin->esAdmin($_POST['usuario']);

                $_SESSION['user'] = $_POST['usuario'];

                if ($esAdmin === true) {
                    $_SESSION['admin'] = "1";
                } else {
                    $_SESSION['admin'] = "0";
                }

                $error = '';
                $usuario = $_POST['usuario'];
                header("Location: ../../../inicioLog.php");

            } else {
                //si no existe redireccionamos a la misma pagina
                $error = "Usuario Incorrecto";
                header("Location:../../iniciarSesion.php?error=".urlencode($error)."");
            }
    
        }
    
    } else {
        //validacion incorrect de envio de datos
        header("Location:./iniciarSesion.php");
        
    }


?>