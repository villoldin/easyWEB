<?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

    class Login extends Conexion {

        public function __contruct() {
            parent::__construct();
        }         

        // Comprueba si existe el usuario y verifica la contraseña

        public function verificarPass($user, $pass) {
            $sql = "SELECT CONTRASEÑA FROM USUARIOS WHERE USUARIO='$user';";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if(password_verify($pass, $existe[0]['CONTRASEÑA'])){
                return true;
            }
            return false;            
        }     

        // Comprueba si el usuario es administrador

        public function esAdmin($user) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE USUARIO='$user' and ADMINISTRADOR = 1;";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }    

    }

?>