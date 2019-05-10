<?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

    class Chat extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Mostrar publicaciones por fecha (más nuevas)

        public function listarPubliFechaNuevas() {
            $sql = "SELECT * FROM PUBLICACIONES ORDER BY FECHA DESC LIMIT 100";
            $resultado = $this->conexion_db->query($sql);
            $listaNuevas = $resultado->fetch_all(MYSQLI_ASSOC);
            return $listaNuevas;            
        }   
        
        // Mostrar publicaciones por fecha (más viejas)

        public function listarPubliFechaViejas() {
            $sql = "SELECT * FROM PUBLICACIONES ORDER BY FECHA ASC";
            $resultado = $this->conexion_db->query($sql);
            $listaViejas = $resultado->fetch_all(MYSQLI_ASSOC);
            return $listaViejas;            
        }   

        
        // Mostrar publicaciones por más votado

        public function listarPubliPositivos() {
            $sql = "SELECT * FROM PUBLICACIONES ORDER BY VOTOS_POSITIVOS";
            $resultado = $this->conexion_db->query($sql);
            $listaPositivos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $listaPositivos;            
        } 

        // Publicar en el foro

        public function publicar($user, $publicacion, $fecha) {
            $sql = "INSERT INTO PUBLICACIONES (USUARIO, PUBLICACION, FECHA) VALUES ('".$user."', '".$publicacion."', '".$fecha."')";
            if ($this->conexion_db->query($sql) === true) {
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

        // Actualizar campo publicaciones

        public function actualizarPublicaciones($user) {
            $sql = "UPDATE USUARIOS SET PUBLICACIONES = PUBLICACIONES+1";
            if ($this->conexion_db->query($sql) === true) {
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

        // Eliminar publicacion

        public function eliminarPublicacion($idPublicacion) {
            $sql = "DELETE FROM PUBLICACIONES WHERE ID_PUBLICACION = ".$idPublicacion;
            if ($this->conexion_db->query($sql) === true) {
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

    }

?>