<?php

    require_once ("C:\\xampp\\htdocs\\easyWEB\\Conexion\\conexion.php");

    class Perfil extends Conexion {

        public function __contruct() {
            parent::__construct();
        }

        // Mostrar datos del usuario

        public function datosUsuario($user) {
            $sql = "SELECT * FROM USUARIOS WHERE USUARIO=\"$user\"";
            $resultado = $this->conexion_db->query($sql);
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $datos;
        }

        // Comprueba el formato del eMail introducido

        public function emailValido($mail) {
            $matches = null;
            return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $mail, $matches));
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
        
        // Editar eMail

        public function editarMail($mail) {
            $sql = "UPDATE USUARIOS SET EMAIL = \"$mail\"";
            if ($this->conexion_db->query($sql) === TRUE) {
                echo "<p class='correcto'>EMail del usuario modificado</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

    }

?>