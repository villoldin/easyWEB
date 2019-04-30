<?php

    require ("C:\\xampp\\htdocs\\easyWEB\\Conexion\\conexion.php");

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

        // Comprueba el formato del eMail introducido

        public function emailValido($mail) {
            $matches = null;
            return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $mail, $matches));
        }
  
        // Registrar usuario

        public function registrarUsuario($user, $nombre, $ape1, $ape2, $mail, $pass) {
            $sql = "INSERT INTO USUARIOS VALUES ('$user','$pass', '$nombre', '$ape1', '$ape2', '$mail');";
            if ($this->conexion_db->query($sql) === TRUE) {
                echo "<p class='correcto'>Usuario registrado</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "</p>" . "<p class='error'>".$conexion_db->error."</p>";
            }           
        }                 

    }

?>