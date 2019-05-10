<?php

    session_start();

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

    class Admin extends Conexion {

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

        // Comprueba si el eMail ya está registrado

        public function existeMail($mail) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE EMAIL=\"$mail\";";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }    
        
        // Editar eMail

        public function editarMail($mail, $user) {
            $sql = "UPDATE USUARIOS SET EMAIL = \"$mail\" WHERE USUARIO = \"$user\";";
            if ($this->conexion_db->query($sql) === true) {
                echo "<p class='correcto'>EMail del usuario modificado</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

        // Comprueba si existe el usuario

        public function existeUsuario($user) {
            $sql = "SELECT COUNT(*) as 'cont' FROM USUARIOS WHERE USUARIO='$user';";
            $resultado = $this->conexion_db->query($sql);
            $existe = $resultado->fetch_all(MYSQLI_ASSOC);
            if($existe[0]['cont'] > 0){
                return true;
            }
            return false;            
        }  
        
        // Hacer usuario administrador

        public function hacerAdmin($user) {
            $sql = "UPDATE USUARIOS SET ADMINISTRADOR = 1 WHERE USUARIO = \"$user\";";
            if ($this->conexion_db->query($sql) === true) {
                echo "<p class='correcto'>Ahora este usuario es Administrador</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

        // Borrar usuario

        public function borrarUsuario($user) {
            $sql = "DELETE FROM USUARIOS WHERE USUARIO = \"$user\";";
            if ($this->conexion_db->query($sql) === true) {
                echo "<p class='correcto'>Usuario borrado</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }
        }

    }

?>