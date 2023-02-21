<?php
    if ($ajax){
        require_once "../../models/main.php";
        require_once "../../view/core/constantes.php";
    }else {
        require_once "./models/main.php";
        require_once "./view/core/constantes.php";
    }

    class gestionModel extends Main{

    }