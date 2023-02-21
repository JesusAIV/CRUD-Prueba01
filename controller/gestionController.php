<?php

if ($ajax){
    require_once "../../models/main.php";
    require_once "../../view/core/conexion.php";
}else{
    require_once "./models/main.php";
    require_once "./view/core/conexion.php";
}

class gestionController extends Main{

    public function ListarProductos(){
        $conexion = Conexion::conectar();

        $sql = "CALL ListarProductos()";
        $query = $conexion->prepare($sql);
        $query -> execute();
        $resultado = $query -> fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }

}