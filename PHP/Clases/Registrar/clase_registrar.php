<?php

    require "../../../Conexion/conexion.php";

    class Registro extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Comprueba si el usuario ya está registrado

        public function existeUsuario($user) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE USUARIO='$user';";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }      

        // Comprueba si el eMail ya está registrado

        public function existeMail($mail) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE EMAIL='$mail';";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }    

        

    }

?>