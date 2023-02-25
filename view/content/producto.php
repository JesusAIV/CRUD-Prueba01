<?php
    $ajax = false;

    require_once "./controller/gestionController.php";
    require_once "./models/main.php";
    $gestion = new gestionController();
    $main = new Main();

    $pagina = explode("/", $_GET['views']);

    $nombreproducto = $pagina[1];

    $nombreproducto = $main->desunirnombre($nombreproducto);

    $lista = $gestion->DatosProducto($nombreproducto);

?>

<?php foreach ($lista as $result){ ?>
<div><?php echo $result -> nombre ?></div>
<?php } ?>