<?php
    if ($ajax){
        require_once "../../models/main.php";
        require_once "../../view/core/constantes.php";
        require_once "../../view/core/conexion.php";
    }else {
        require_once "./models/main.php";
        require_once "./view/core/constantes.php";
        require_once "./view/core/conexion.php";
    }

    class gestionModel extends Main{
        protected function actualizarProducto($datos){
            $conexion = Conexion::conectar();

            $idproducto=$datos['idproducto'];
            $nombre=$datos['nombre'];
            $imagen=$datos['imagen'];
            $precio=$datos['precio'];

            $sql = "CALL UpdateProducto($idproducto, '$nombre', '$imagen', '$precio')";

            $result = $conexion->prepare($sql);
            $result -> execute();

            return $result;
        }

        protected function addProducto($datos){
            $conexion = Conexion::conectar();

            $nombre=$datos['nombre'];
            $imagen=$datos['imagen'];
            $precio=$datos['precio'];

            $sql = "CALL AgregarProducto('$nombre', '$imagen', '$precio')";

            $result = $conexion->prepare($sql);
            $result -> execute();

            return $result;
        }

        protected function deleteProducto($id){
            $conexion = Conexion::conectar();

            $sql = "CALL EliminarProducto('$id')";

            $result = $conexion->prepare($sql);
            $result -> execute();

            return $result;
        }
    }