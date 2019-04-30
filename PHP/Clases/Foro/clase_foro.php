<?php

    require "../../../Conexion/conexion.php";

    class Foro extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Mostrar publicaciones por fecha (más nuevas)

        public function listarPubliFechaNuevas() {
            $sql = "SELECT * FROM PUBLICACIONES ORDER BY FECHA ASC";
            $resultado = $this->conexion_db->query($sql);
            $listaNuevas = $resultado->fetch_all(MYSQLI_ASSOC);
            return $listaNuevas;            
        }   
        
        // Mostrar publicaciones por fecha (más viejas)

        public function listarPubliFechaViejas() {
            $sql = "SELECT * FROM PUBLICACIONES ORDER BY FECHA DESC";
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
            $sql = "INSERT INTO PUBLICACIONES (USUARIO, PUBLICACION, FECHA) VALUES (".$user.", '".$publicacion."', '".$fecha."')";
            if ($this->conexion_db->query($sql) === TRUE) {
                echo "<p class='correcto'>Publicado";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }
    }

?>