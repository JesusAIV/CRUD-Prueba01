<?php
    $ajax = false;
    require_once "./controller/gestionController.php";
    $gestion = new gestionController();

    // Lista de productos
    $lista = $gestion->ListarProductos();
?>

<div class="panel">
    <div class="cont-tabla" id="content-tabla">
    </div>
    <div class="cont-formulario">
        <div class="formulario">
            <div class="btnacciones">
                <div class="btn-accion">
                    <button class="button-accion-new" id="new-produc">Nuevo producto</button>
                </div>
            </div>
            <form action="<?php echo SERVERURL.'view/action/gestion.php' ?>" method="POST" class="form-input" enctype="multipart/form-data">
                <input type="text" name="id-produc" id="id-produc" style="display: none;">
                <div class="campo campo-nombre">
                    <label for="nombre-produc">Nombre</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="campo campo-precio">
                    <label for="nombre-produc">Precio</label>
                    <input type="text" id="price" name="price">
                </div>
                <div class="campo campo-imagen">
                    <label for="nombre-produc">Imagen</label>
                    <div>
                        <label class="btn_image" for="imagen-prod">Selecciona imagen</label>
                        <input type="file" id="imagen-prod" name="imagen-produc">
                    </div>
                </div>
                <div class="campo campo-image-preview">
                    <img id="uppimagensrc" width="300" src="<?php echo SERVERURL.'view/assets/img/noimage.jpg' ?>" alt="">
                </div>
                <div class="campo campo-guardar">
                    <button id="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>