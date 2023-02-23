<?php
    $ajax = false;
    require_once "./controller/gestionController.php";
    $gestion = new gestionController();

    // Lista de productos
    $lista = $gestion->ListarProductos();
?>

<table class="tabla-produc-admin">
    <tr>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Usuario</th>
    </tr>
    <?php foreach ($lista as $result){ ?>
    <tr>
        <td class="center-flex"><div><?php echo $result -> nombre; ?></div></td>
        <td class="center-flex"><div>S/.<?php echo $result -> precio; ?></div></td>
        <td class="table-image"><img src="<?php echo SERVERURL.'view/'.$result -> imagen ?>" alt=""></td>
    </tr>
    <?php } ?>
</table>