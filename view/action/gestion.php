<?php
    $ajax = true;
    session_start();

    require_once "../../controller/gestionController.php";
    $opciones = new gestionController();

    if (isset($_POST['update-produc'])) {
        echo $opciones->actualizarProductoC();
    }

    if (isset($_POST['save-produc'])) {
        echo $opciones->AgregarProducto();
    }

    if (isset($_POST['deleteprod'])) {
        echo $opciones->EliminarProducto();
    }