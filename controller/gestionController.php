<?php

if ($ajax){
    require_once "../../models/main.php";
    require_once "../../models/gestionModel.php";
    require_once "../../view/core/conexion.php";
}else{
    require_once "./models/main.php";
    require_once "./models/gestionModel.php";
    require_once "./view/core/conexion.php";
}

class gestionController extends gestionModel{

    public function ListarProductos(){
        $conexion = Conexion::conectar();

        $sql = "CALL ListarProductos()";
        $query = $conexion->prepare($sql);
        $query -> execute();
        $resultado = $query -> fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }

    public function DatosProducto($nombreproducto){

        $conexion = Conexion::conectar();
        $sql = "DatosProducto('$nombreproducto')";
        $query = $conexion->prepare($sql);
        $query -> execute();

        $resultado = $query -> fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }

    public function actualizarProductoC(){
        $idproducto = $_POST['id-produc'];
        $nombre = $_POST['name'];
        $precio = $_POST['price'];

        $conexion = Conexion::conectar();

        $sqlprod = "SELECT * FROM producto WHERE id = '$idproducto'";
        $query = $conexion->prepare($sqlprod);
        $query -> execute();

        $resultado = $query -> fetchAll(PDO::FETCH_OBJ);

        foreach ($resultado as $keyp){}

        if($_FILES['imagen-produc']['name']){
            $dir = "../img/laptops/";
            $nombreArchivo = $_FILES['imagen-produc']['name'];
            $tipo = $_FILES['imagen-produc']['type'];
            $tipo = strtolower($tipo);
            $extension = substr($tipo,strpos($tipo,'/')+1);
            $name = $nombreArchivo.'-'.time().'.'.$extension;

            if(!is_dir($dir)){
                mkdir($dir, 0777, true);
            }

            move_uploaded_file($_FILES['imagen-produc']['tmp_name'], $dir.$name);

            $directorio = $dir.$name;

            $imagen = substr($directorio, 3);
        }else{
            $imagen = $keyp -> imagen;
        }

        $datosP = [
            "idproducto" => $idproducto,
            "nombre" => $nombre,
            "precio" => $precio,
            "imagen" => $imagen
        ];

        // Ejecuta la función agregarPersonal obteniendo el array de datos
        $addProducto = gestionModel::actualizarProducto($datosP);

        if ($addProducto >= 1) { /* Si la consulta se ejecuta correctamente */
            // Dará una alerta de éxito
            $alerta = "Producto actualizado";
        } else {
            // Dará una alerta de error
            $alerta = "Ocurrio un error inesperado";
        }

        return $alerta;
    }

}