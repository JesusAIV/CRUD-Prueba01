<?php
    $ajax = false;
    require_once "./controller/gestionController.php";
    $gestion = new gestionController();

    // Lista de productos
    $lista = $gestion->ListarProductos();
?>

<div class="panel">
    <div class="cont-tabla">
        <table class="tabla-produc-admin">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th colspan="2">Acciones</th>
            </tr>
            <?php foreach ($lista as $result){ ?>
            <tr>
                <td class="center-flex">
                    <div><?php echo $result -> nombre; ?></div>
                </td>
                <td class="center-flex">
                    <div>S/.<?php echo $result -> precio; ?></div>
                </td>
                <td class="table-image">
                    <img src="<?php echo SERVERURL.'view/'.$result -> imagen ?>" alt="">
                </td>
                <td class="center-flex">
                    <a href="#">
                        <img src="<?php echo SERVERURL.'view/assets/img/svg/delete.svg' ?>" alt="">
                    </a>
                </td>
                <td class="center-flex">
                    <a href="#">
                        <img src="<?php echo SERVERURL.'view/assets/img/svg/edit.svg' ?>" alt="">
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="cont-formulario">
        <div class="formulario">
            <form action="" method="POST" class="form-input">
                <div class="campo campo-nombre">
                    <label for="nombre-produc">Nombre</label>
                    <input type="text">
                </div>
                <div class="campo campo-precio">
                    <label for="nombre-produc">Precio</label>
                    <input type="number">
                </div>
                <div class="campo campo-imagen">
                    <label for="nombre-produc">Imagen</label>
                    <input type="file" style="display: none;" id="nombre-prod">
                    <label class="btn_image" for="nombre-prod">Selecciona imagen</label>
                </div>
                <div class="campo campo-image-preview">
                    <img src="<?php echo SERVERURL.'view/assets/img/noimage.jpg' ?>" alt="">
                </div>
            </form>
        </div>
    </div>
</div>