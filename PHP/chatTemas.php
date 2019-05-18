<?php
    
    session_start();

    require "Clases/Chat/clase_chat.php";

    $objetoChat = new Chat();

    if (isset($_SESSION['user'])) {
        $usuario=$_SESSION['user'];
        $admin = $_SESSION['admin'];
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
    <link rel="stylesheet" href="../Frameworks/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../StyleSheets/CSS_Compiled/styleChatTemas.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="../Frameworks/JQuery.js"></script>
</head>

<body>
    <div class="row col-md-12 header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                    <ul id="foroNoLog">
                        <li>
                            <a class="nav-link" href="iniciarSesion.php"><i class="fas fa-user"></i> Iniciar sesión</a>   
                        </li>
                        <li>
                            <a class="nav-link" href="registrar.php"><i class="fas fa-user-plus"></i> Registrarse</a>
                        </li>
                    </ul>
                    <ul id="foroLog">
                        <li>
                            <a class="nav-link" href="miPerfil.php"><i class="fas fa-user"></i> Mi perfil</a></li>
                        <li>
                            <a class="nav-link" href="Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="far fa-comments"></i> Chat EasyWEB</h1>
                <p id="indicacion">Escoge la temática que desees para chatear tus dudas y consejos. Recuerda que tienes que seguir la temática del chat escogido.</p>
                <div class="temas">             
                    <div class="tarjetaTema" id="javascript">
                        <p class="iconoTema"><i class="fab fa-js-square"></i></p>
                        <p>JavaScript</p>
                    </div>
                    <div class="tarjetaTema" id="php">
                        <p class="iconoTema"><i class="fab fa-php"></i></p>
                        <p>PHP</p>
                    </div>
                    <div class="tarjetaTema" id="java">
                        <p class="iconoTema"><i class="fab fa-java"></i></p>
                        <p>Java</p>
                    </div>
                    <div class="tarjetaTema" id="diseño">
                        <p class="iconoTema"><i class="fab fa-sass"></i></p>
                        <p>Diseño</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../JavaScript/chatTemas.js"></script>

    <!--- Comprobación que comprueba si estas log para desbloquear opciones -->

    <?php  
        if (!isset($_SESSION['user'])) {
    ?>
    <script src="../JavaScript/foroNoLog.js"></script>
    <?php } ?>        
    
</body>

</html>