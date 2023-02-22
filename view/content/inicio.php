<?php
    $ajax = false;
    require_once "./controller/gestionController.php";
    $gestion = new gestionController();

    // Lista de productos
    $lista = $gestion->ListarProductos();
?>

<header class="header">
    <nav class="header-nav">
        <div class="nav-content-logo"><h1 class="nav-logo">Logo</h1></div>
        <div class="nav-menu">
            <div class="nav-menu-item"><a class="nav-menu-a" href="">Inicio</a></div>
            <div class="nav-menu-item"><a class="nav-menu-a" href="">Productos</a></div>
            <div class="nav-menu-item"><a class="nav-menu-a" href="">Nosotros</a></div>
            <div class="nav-menu-item"><a class="nav-menu-a" href="">Tiendas</a></div>
        </div>
        <div class="nav-content-login">
            <div class="nav-content-a-login">
                <a class="nav-login" href="login">Admin</a>
            </div>
        </div>
    </nav>
</header>
<div class="content-info-product">
    <?php foreach ($lista as $result){ ?>
    <div class="content-product">
        <div class="imagen-product">
            <img src="<?php echo SERVERURL.'view/'.$result -> imagen ?>" alt="">
        </div>
        <hr>
        <div class="nombre-product">
            <p><?php echo $result -> nombre; ?></p>
        </div>
        <hr>
        <div class="precio-product">
            <p>S/.<?php echo $result -> precio; ?></p>
        </div>
        <hr>
        <div class="btn-ver-produc">
            <input type="submit" class="btn-produc" value="Ver producto">
        </div>
    </div>
    <?php } ?>
</div>