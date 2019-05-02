<?php
    
    require "./Clases/MiPerfil/clase_perfil.php";

    $miPerfil = new Perfil();
    $usuario =$_COOKIE['usuario'];

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
    <link rel="stylesheet" href="../StyleSheets/CSS_Compiled/styleRegistar.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="../Frameworks/JQuery.js"></script>
</head>

<body>
    <div class=" row col-md-12 header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="../index.php">EasyWEB</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crearWEB.php"><i class="fas fa-chalkboard"></i> Crea tu propia WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.php"><i class="far fa-comments"></i> Chat</a>
                    </li>
                </ul>
                <ul id="logIn">                    
                    <li class="log"><a class="nav-link" href="#"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <li class="log"><a class="nav-link" href="Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fas fa-user"></i> Mi perfil</h1>

                <?php
                    $infoPerfil = $miPerfil->datosUsuario($usuario);
                ?>

                <form action="miPerfil.php" name="datosPerfil" method="post">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" value="<?php echo $infoPerfil[0]['Usuario']?>" disabled>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $infoPerfil[0]['Nombre']?>" disabled>
                    <label for="apellido1">Primer apellido</label>
                    <input type="text" name="apellido1" id="apellido1" value="<?php echo $infoPerfil[0]['Apellido1']?>" disabled>
                    <label for="apellido2">Segundo apellido</label>
                    <input type="text" name="apellido2" id="apellido2" value="<?php echo $infoPerfil[0]['Apellido2']?>" disabled>
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" id="email" value="<?php echo $infoPerfil[0]['EMail']?>">
                    <label for="email">Publicaciones</label>
                    <input type="text" name="publicaciones" id="publicaciones" disabled>
                    <input type="submit" name="btnEditar" value="Editar email">
                </form>

                <?php

                    $existeMail = $miPerfil->existeMail($_POST['email']);
                    $mailValido = $miPerfil->mailValido($_POST['email']);


                    if (isset($_POST['btnEditar'])) {
                        if(empty($_POST['email'])) {
                            echo "<p class='error'>No puede haber ningun campo vacio</p>";
                        } else {    
                            if ($existeMail[0]['cont'] != 0) {
                                echo '<div class="error"><p>EMail ya registrado en easyWEB</p></div>';
                            } else if ($mailValido != 1) {
                                echo '<div class="error"><p>El formato del eMail no es correcto</p></div>';
                            } else {
                                $edicionMail = $miPerfil->editarMail($_POST['email']);
                            }
                        }
                    }

                ?>           

            </div>
        </div>
    </div>
</body>

</html>