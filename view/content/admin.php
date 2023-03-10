<?php
    $ajax = false;
    require_once "./controller/gestionController.php";
    $gestion = new gestionController();

    // Lista de productos
    $lista = $gestion->ListarProductos();
?>

<div class="acction">
    <div>
        <a href="<?php echo SERVERURL?>inicio" class="regresar">Inicio</a>
    </div>
    <div>
        <a href="<?php echo SERVERURL.'view/action/logout.php' ?>" class="logout" name="log">Cerrar sesion</a>
    </div>
</div>

<div class="panel">
    <div class="cont-tabla" id="content-tabla">
        <table class="tabla-produc-admin">
            <thead class="thead-table">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista as $result) { ?>
                <tr>
                    <td class="center-flex"><?php echo $result -> id ?></td>
                    <td class="center-flex"><?php echo $result -> nombre ?></td>
                    <td class="center-flex"><?php echo $result -> precio ?></td>
                    <td class="table-image"><img class="image-img" src="<?php echo SERVERURL.'view/'.$result -> imagen ?>" alt=""></td>
                    <td class="center-flex">
                        <form action="<?php echo SERVERURL.'view/action/gestion.php' ?>" method="POST" enctype="multipart/form-data">
                            <button href="" id="delete" name="deleteprod">
                                <input type="hidden" value="<?php echo $result -> id ?>" name="id-produc">
                                <input type="hidden" >
                                <img src="<?php echo SERVERURL.'view/assets/img/svg/delete.svg' ?>" alt="">
                            </button>
                        </form>
                    </td>
                    <td class="center-flex">
                        <a href="" class="editar" data-id="'.$result -> id .'">
                            <img src="<?php echo SERVERURL.'view/assets/img/svg/edit.svg' ?>" alt="">
                        </a>
                    </td>
                </tr>
            
            <?php } ?>
            </tbody>
        </table>
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
                    <button id="btn-guardar" name="save-produc">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>