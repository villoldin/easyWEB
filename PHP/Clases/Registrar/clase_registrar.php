<?php

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/easyWEB/Conexion/conexion.php");

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

        // Registrar usuario

        public function registrarUsuario($user, $nombre, $ape1, $ape2, $mail, $pass) {
            $sql = "INSERT INTO USUARIOS (USUARIO, CONTRASEÑA, NOMBRE, APELLIDO1, APELLIDO2, EMAIL) VALUES ('$user','$pass', '$nombre', '$ape1', '$ape2', '$mail');";
            if ($this->conexion_db->query($sql) === TRUE) {
                echo "<p class='correcto'>Usuario registrado</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }           
        }                 

    }

?>