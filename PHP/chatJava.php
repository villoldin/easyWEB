<?php
    
    session_start();

    require "Clases/Chat/clase_chat.php";

    $objetoChat = new Chat();

    $tema = 'java';

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
    <link rel="stylesheet" href="../StyleSheets/CSS_Compiled/styleChat.css">
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
                        <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Inicio<span
                                class="sr-only">(current)</span></a>
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
                        <li><a class="nav-link" href="iniciarSesion.php"><i class="fas fa-user"></i> Iniciar sesión</a></li>
                        <li><a class="nav-link" href="registrar.php"><i class="fas fa-user-plus"></i> Registrarse</a></li>
                    </ul>
                    <ul id="foroLog">
                        <li><a class="nav-link" href="miPerfil.php"><i class="fas fa-user"></i> Mi perfil</a></li>
                        <li><a class="nav-link" href="Clases/LogIn/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fab fa-java"></i> Chat Java</h1>
                <div class='col-md-12' id='formPublicacion'>
                    <form action="chatJava.php" method="post">
                        <input type="text" name="publicacion" id="publicacion" placeholder="Escribe tu publicación ...">
                        <input type="submit" value="Publicar" name="btnPublicar" id="publicar">
                    </form>

                    <?php
                        if (isset($_POST['btnPublicar'])) {
                            $publicacion = $_POST['publicacion'];

                            if ($publicacion == "") {
                                echo '<div class="error"><p>No puedes publicar algo vacío</p></div>';
                            } else {
                                $fecha = date("Y-m-d");
                                $horaActual = date("H:i:s");
                                $fecha = date("Y-m-d H:i:s", strtotime($fecha . $horaActual));
                                $publicar = $objetoChat->publicar($usuario, $publicacion, $fecha, $tema);
                                $publicar = $objetoChat->actualizarPublicaciones($usuario);
                                header('Location: chatJava.php');
                            }
                            
                        }
                    ?>

                </div>
                <div id="publicaciones">                    
                    
                    <?php
                        $publicaciones = $objetoChat->listarPublicaciones($tema);
                        
                        foreach ($publicaciones as $publi) {
                            echo "<div class='tarjetaPublicacion' id='".$publi['ID_Publicacion']."'><p id='usuario'>".$publi['Usuario']."</p><p id='fecha'>".$publi['Fecha']."</p><p id='publicacion'>".$publi['Publicacion']."</p><form action='' method='post' class='formAdmin'><input type='submit' value='Eliminar' name='btnEliminar'><input type='text' value='".$publi['ID_Publicacion']."' name='idPublicacion' id='ocultarCampo'></form></div>";
                            if ($admin != 1) {
                                ?>                
                                <script src="../JavaScript/botonEliminar.js"></script>
                                <?php
                            }
                        }                        

                        if (isset($_POST['btnEliminar'])) {
                            $idPublicacion = $_POST['idPublicacion'];
                            $eliminar = $objetoChat->eliminarPublicacion($idPublicacion);
                    ?>
                            <script>
                                document.getElementById('publicaciones').innerHTML = "";
                            </script>
                    <?php 
                            $publicaciones = $objetoChat->listarPublicaciones($tema);
                        
                            foreach ($publicaciones as $publi) {
                                echo "<div class='tarjetaPublicacion' id='".$publi['ID_Publicacion']."'><p id='usuario'>".$publi['Usuario']."</p><p id='fecha'>".$publi['Fecha']."</p><p id='publicacion'>".$publi['Publicacion']."</p><form action='' method='post' class='formAdmin'><input type='submit' value='Eliminar' name='btnEliminar'><input type='text' value='".$publi['ID_Publicacion']."' name='idPublicacion' id='ocultarCampo'></form></div>";
                                if ($admin != 1) {
                                    ?>                
                                    <script src="../JavaScript/botonEliminar.js"></script>
                                    <?php
                                }
                            } 
                        }                      
                    
                    ?>
                </div>
            </div>            
        </div>
    </div>

    <!--- Comprobación que comprueba si estas log para desbloquear opciones -->

    <?php  
        if (!isset($_SESSION['user'])) {
    ?>
    <script src="../JavaScript/foroNoLog.js"></script>
    <?php } ?>        

    <script src="../JavaScript/menuDesplegable.js"></script>
</body>

</html>