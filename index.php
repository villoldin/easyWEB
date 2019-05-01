<?php

    session_start();

    if (isset($_SESSION['user'])) {
        header("Location:inicioLog.php");
    }

    error_reporting(E_ERROR | E_PARSE);

?>

<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EASY-WEB</title>
    <link rel="stylesheet" href="Frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheets/CSS_Compiled/styleHome.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="Frameworks/JQuery.js"></script>
</head>

<body>
    <div class="row col-md-12 header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.php">EasyWEB</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PHP/crearWEB.php"><i class="fas fa-chalkboard"></i> Crea tu propia WEB</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="PHP/foro.php"><i class="far fa-comments"></i> Chat</a>
                    </li>
                </ul>
                <ul id="logIn">
                    <li><a class="nav-link" href="PHP/iniciarSesion.php"><i class="fas fa-user"></i> Iniciar sesión</a></li>
                    <li><a class="nav-link" href="PHP/registrar.php"><i class="fas fa-user-plus"></i> Registrarse</a></li>
                </ul>

            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class='row col-md-12'>
            <h1><i class="fas fa-laptop-code"></i> ¿Qué es EasyWEB?</h1>
            <p>EasyWEB servicio con el que podrás editar plantillas para crear tu propio código HTML para implementarlo en tus proyectos.</p>
            <h1><i class="fas fa-chalkboard"></i> Plantillas</h1>
            <div id="prevPlantillas">
                <div id="Plantilla1">
                    <p>Plantilla 1</p>
                    <iframe src="Plantillas/PlantillasHTML/Plantilla1.html" frameborder="0" width="90%" height="auto"
                        scroll="no"></iframe>
                </div>
                <div id="Plantilla2">
                    <p>Plantilla 2</p>
                    <iframe src="Plantillas/PlantillasHTML/Plantilla2.html" frameborder="0" width="90%" height="auto"
                        scroll="no"></iframe>
                </div>
                <div id="Plantilla3">
                    <p>Plantilla 3</p>
                    <iframe src="Plantillas/PlantillasHTML/Plantilla3.html" frameborder="0" width="90%" height="auto"
                        scroll="no"></iframe>
                </div>
                <div id="Plantilla4">
                    <p>Plantilla 4</p>
                    <iframe src="Plantillas/PlantillasHTML/Plantilla4.html" frameborder="0" width="90%" height="auto"
                        scroll="no"></iframe>
                </div>
            </div>
            <h1><i class="far fa-smile"></i> ¿Cómo puedo usar EasyWEB?</h1>
            <p>Para disfrutar de estos servicios solo tienes que crearte una cuenta gratuita en nuestra plataforma y... ¡ESO ES TODO!</p>
        </div>

    </div>

</body>

</html>