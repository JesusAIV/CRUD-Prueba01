<?php
require_once "core/constantes.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto 01</title>
    <link rel="stylesheet" href="<?php echo SERVERURL ?>view/assets/css/styles.css" />
    <script src="<?php echo SERVERURL?>view/assets/js/jquery-3.6.3.min.js"></script>
</head>

<body>
    <?php
        $ajax = false;
        require_once "./controller/viewcontroller.php";
        $view = new viewcontroller();
        $vistas = $view->obtenervistacontrolador();

        if ($vistas == "inicio") {
            $vistas = "./view/content/inicio.php";
        }
    ?>

    <?php require_once $vistas; ?>

    <script src="<?php echo SERVERURL ?>view/assets/js/index.js"></script>
</body>

</html>