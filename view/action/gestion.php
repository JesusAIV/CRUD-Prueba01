<?php
    $ajax = true;
    session_start();

    require_once "../../controller/gestionController.php";
    $opciones = new gestionController();

    if (isset($_POST['update-produc'])) {
        echo $opciones->actualizarProductoC();
    }

    if ($_POST['action'] == 'actualizar') {
        echo $opciones->listarproductostabla();
    }