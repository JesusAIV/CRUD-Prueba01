<?php

class Conexion{

    

    // Función protegida para la Conexion
    public static function conectar(){

        $host = 'localhost';
        $dbname = 'tiendaproductos';
        $username = 'root';
        $password = '';
        $conn;

        $conn = null;

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }

        return $conn;

    }
}