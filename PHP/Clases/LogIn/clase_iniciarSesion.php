<?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

    class Login extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Comprueba si existe el usuario

        public function existeUsuario($user,$pass) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE USUARIO='$user' and CONTRASEÑA='$pass';";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }       

    }

?>