<?php
    
    require "./Clases/MiPerfil/clase_perfil.php";

    $miPerfil = new Perfil();

    $usuario = $_SESSION['user'];

    if ($admin == 1) {
        header("Location: administrador.php");
    }

    error_reporting(0);

?>

<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EASY-WEB</title>
    <link rel="stylesheet" href="../Frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../StyleSheets/CSS_Compiled/styleMiPerfil.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="../Frameworks/JQuery.js"></script>
    
</head>

<body>
    <div class=" row col-md-12 header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
                <a class="navbar-brand" href="../index.php">EasyWEB</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item d-none d-sm-none d-md-none d-lg-block">
                        <a class="nav-link" href="crearWEB.php"><i class="fas fa-laptop-code"></i> Crea tu propia WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chatTemas.php"><i class="far fa-comments"></i> Chat</a>
                    </li>
                </ul>
                <ul id="logIn">                    
                    <li class="log"><a class="nav-link" href="#"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <li class="log"><a class="nav-link" href="Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </div>
        </nav>
        <script src="../JavaScript/menuDesplegable.js"></script>
    </div>

    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fas fa-user"></i> Cabio de contraseña</h1>

                <?php
                    $infoPerfil = $miPerfil->datosUsuario($usuario);
                ?>

                <form action="cambioContraseña.php" name="cambioPass" method="post">
                    <label for="pass">Nueva contraseña</label>
                    <input type="password" name="pass" id="pass">
                    <label for="nombre">Confirmar contraseña</label>
                    <input type="password" name="confPass" id="confPass">
                    <input type="submit" name="btnCambiar" value="Cambiar contraseña">

                    <?php

                        if (isset($_POST['btnCambiar'])) {
                            $passNueva = $_POST['pass'];
                            $confPassNueva = $_POST['confPass'];

                            if($passNueva == "" || $confPassNueva == "") {
                                echo "<p class='error'>No puede haber ningun campo vacio</p>";
                            } else {    
                                if ($passNueva != $confPassNueva) {
                                    echo '<div class="error"><p>Las contraseñas no coinciden</p></div>';
                                } else {
                                    $cambioPass = $miPerfil->cambiarContraseña($passNueva, $usuario);
                                }
                            }
                        }
                        
                    ?>

                </form>
            </div>
        </div>
    </div>    
</body>

</html>