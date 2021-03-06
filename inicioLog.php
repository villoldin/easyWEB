<?php

    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location:index.php");
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
    <link rel="stylesheet" href="Frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheets/CSS_Compiled/styleHomeLog.css">
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
            <a class="navbar-brand" href="index.php">EasyWEB</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">                
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item d-none d-sm-none d-md-none d-lg-block">
                        <a class="nav-link" href="PHP/crearWEB.php"><i class="fas fa-laptop-code"></i> Crea tu propia WEB</a></li>
                    <li class="nav-item">
                            <a class="nav-link" href="PHP/chatTemas.php"><i class="far fa-comments"></i> Chat</a>
                    </li>
                </ul>
                <ul id="logIn">
                    <li><a class="nav-link" href="PHP/miPerfil.php"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <li><a class="nav-link" href="PHP/Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class='row col-md-12'>
            <h1><i class="fas fa-laptop-code"></i> ¿Qué es EasyWEB?</h1>
            <p>EasyWEB servicio con el que podrás editar plantillas para crear tu propio código HTML para implementarlo en tus proyectos.</p>
            <p>Podrás editar las plantillas disponibles cambiando los elementos, color, sombras, bordes, color de letra, etc...</p>
            <p>Una vez que creas que has conseguido el diseño deseado, podrás exportar el código HTML para usarlo en tu proyecto y así ahorrarte el trabajo.</p>
            <p>Indicaciones:</p>
            <ul>
                <li>Color de fondo y color de letra: para indicar el color lo puedes hacer con el nombre del color en inglés, en código hexadecimal o RGB.</li>
                <li>Borde: esta opción pone y quita un borde negro de 1px de grosor.</li>
                <li>Sombra: esta opción pone y quita una sombra para añadir volumen a los elementos.</li>
            </ul>
            <p id="avisoHome">¡Este servicio solo está disponible en la versión de escritorio!</p>
            <h1><i class="fas fa-chalkboard"></i> Plantillas</h1>
            <p>Estas son las plantillas que podrás editar en nuestra plataforma.</p>
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
            <h1><i class="far fa-comments"></i> Chat</h1>
            <p>Aquí podrás consultar dudas sobre desarrollo WEB y compartir tus consejos para ayudar a la comunidad y hacerles más fácil la dura vida del desarrollador.</p>
            <p>Solo podrás publicar en nuestro chat si has iniciado sesión en EasyWEB, si no solo podrás leer lo que los miembros de la communidad han compartido.</p>
            <p>Normas del chat:</p>
            <ul>
                <li>Utiliza lenguaje educado.</li>
                <li>Mantened siempre el respeto hacia los demás, estamo aquí para ayudarnos.</li>
                <li>Solo temas de desarrollo.</li>
            </ul>
            <p id="avisoHome">¡El incumplimiento de estas normas podría acarrear sanción para el usuario!</p>
            <h1><i class="far fa-smile"></i> ¿Cómo puedo usar EasyWEB?</h1>
            <p>Para disfrutar de estos servicios solo tienes que crearte una cuenta gratuita en nuestra plataforma y... ¡ESO ES TODO!</p>            
        </div>

    </div>

    <script src="JavaScript/menuDesplegable.js"></script>
</body>

</html>