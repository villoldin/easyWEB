<?php

require "Clases/clase_registrar.php";

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
                <a class="navbar-brand" href="../index.html">EasyWEB</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html"><i class="fas fa-home"></i> Inicio<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Plantillas/plantillasInfo.html"><i class="fas fa-chalkboard"></i>
                            Crea tu propia WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="far fa-comments"></i>
                            Foro</a>
                    </li>
                </ul>
                <ul id="logIn">
                    <li class="noLog"><a class="nav-link" href="iniciarSesion.php"><i class="fas fa-user"></i> Iniciar
                            sesión</a></li>
                    <li class="noLog"><a class="nav-link" href="registrar.php"><i class="fas fa-user-plus"></i>
                            Registrarse</a></li>
                    <li class="log"><a class="nav-link" href=""><i class="fas fa-user"></i> Mi perfil</a>
                    </li>
                    <li class="log"><a class="nav-link" href=""><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fas fa-user-plus"></i> Registro en EasyWEB</h1>
                <p>Al crear un perfil en EasyWEB accedes a la creacción de tus propios diseños y compartir tus dudas y comentarios en nuestro foro</p>
                <form action="registrar.php" name="registro" method="post" id="formSesion">
                    <label for="usuario">Usuario (*)</label>
                    <input type="text" name="usuario" id="usuario">
                    <label for="nombre">Nombre (*)</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="apellido1">Primer apellido (*)</label>
                    <input type="text" name="apellido1" id="apellido1">
                    <label for="apellido2">Segundo apellido</label>
                    <input type="text" name="apellido2" id="apellido2">
                    <label for="email">E-Mail (*)</label>
                    <input type="text" name="email" id="email">
                    <label for="pass">Contraseña (*)</label>
                    <input type="password" name="pass" id="pass">
                    <input type="button" value="Borrar campos" id="btnReset">
                    <input type="submit" value="Registrarse">
                    <p>Los campos marcados con * son obligatorios de completar.</p>
                </form>  
                
                <?php

                    if (isset($_POST['registro'])) { 
                        $usuario = $_POST['usuario'];
                        
                    }

                ?>
            </div>
        </div>
    </div>


    <script src="../JavaScript/registro.js"></script>
</body>

</html>