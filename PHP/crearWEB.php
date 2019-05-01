<?php
    /*
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: iniciarSesion.php");
    }

    error_reporting(E_ERROR | E_PARSE);
    */
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
    <link rel="stylesheet" href="../StyleSheets/CSS_Compiled/styleCrearWEB.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="../Frameworks/JQuery.js"></script>
    <script src="../Frameworks/JQueryUI/jquery-ui.min.js"></script>
</head>

<body>
    <div class="row col-md-12 header">
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
                        <a class="nav-link" href="foro.php"><i class="far fa-comments"></i> Chat</a>
                    </li>
                </ul>
                <ul id="logIn">                    
                    <li class="log"><a class="nav-link" href="miPerfil.php"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <li class="log"><a class="nav-link" href="Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>
                    <li id="mostrarMenu"><button class="desplegarMenu"><i class="fas fa-bars"></i></button></li>
                    <li id="quitarMenu"><button class="desplegarMenu"><i class="fas fa-bars"></i></button></li>
                </ul>
            </div>
        </nav>
                    

                    
    </div>

    <div class="cuerpoCreacionWEB">
        <div class='row'>
            <div class="col-md-12" id="menuCreacion">
                <h1 class="container titulo"><i class="fas fa-chalkboard"></i> Crea tu propia WEB</h1>
                <iframe src="../Plantillas/PlantillasHTML/Plantilla1.html" frameborder="0" id="lienzo">

                </iframe>
            </div>
            <div class="col-md-0" id="menuLateral">
                <div id="menuLateralContenido">
                    <div id="plantillasDisponibles">
                        <div class="tarjetaPlantilla" id="plantilla1">
                            <p>Arrastra</p>
                            <iframe src="../Plantillas/PlantillasHTML/Plantilla1.html" frameborder="0" width="70%" height="70%"
                                scroll="no"></iframe>
                        </div>
                        <div class="tarjetaPlantilla" id="plantilla2">
                            <p>Arrastra</p>
                            <iframe src="../Plantillas/PlantillasHTML/Plantilla2.html" frameborder="0" width="70%" height="auto"
                                scroll="no"></iframe>
                        </div>
                        <div class="tarjetaPlantilla" id="plantilla3">
                            <p>Arrastra</p>
                            <iframe src="../Plantillas/PlantillasHTML/Plantilla3.html" frameborder="0" width="70%" height="auto"
                                scroll="no"></iframe>
                        </div>
                        <div class="tarjetaPlantilla" id="plantilla4">
                            <p>Arrastra</p>
                            <iframe src="../Plantillas/PlantillasHTML/Plantilla4.html" frameborder="0" width="70%" height="auto"
                                scroll="no"></iframe>
                        </div>
                    </div>
                </div>                
            </div>
            
        </div>
    </div>

    <script src="../JavaScript/crearWEB.js"></script>

</body>

</html>