<?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

    class Chat extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Mostrar publicaciones

        public function listarPublicaciones($tema) {
            $sql = "SELECT * FROM PUBLICACIONES WHERE TEMA = '".$tema."' ORDER BY FECHA DESC LIMIT 100";
            $resultado = $this->conexion_db->query($sql);
            $listaNuevas = $resultado->fetch_all(MYSQLI_ASSOC);
            return $listaNuevas;            
        }

        // Publicar en el chat

        public function publicar($user, $publicacion, $fecha, $tema) {
            $sql = "INSERT INTO PUBLICACIONES (USUARIO, PUBLICACION, FECHA, TEMA) VALUES ('".$user."', '".$publicacion."', '".$fecha."', '".$tema."')";
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