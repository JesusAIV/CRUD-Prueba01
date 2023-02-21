<?php

    if ($ajax){
        require_once "../view/core/conexion.php";
        require_once "../models/main.php";
    } else {
        require_once "./view/core/conexion.php";
        require_once "./models/main.php";
    }

    class LoginModel extends Main{

        protected function iniciar_sesion($datos){
            // Recibe la conexión y lo almacena en la variable '$conexion'
            $conexion = Conexion::conectar();

            // Recoge los datos del array '$datos'
            $usuario = $datos['usuario']; // El dato email lo almacena en la variale '$email'
            $password = $datos['password']; // El dato password lo almacena en la variale '$password'

            // Consulta sql para buscar al usuario con el con el correo y contraseña indicada
            $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$password'";

            // Ejecuta la consulta sql
            $consulta = $conexion->query($sql);

            // Retorna la consulta
            return $consulta;
        }
    }

?>