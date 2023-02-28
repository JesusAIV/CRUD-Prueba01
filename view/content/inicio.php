<?php
    session_start();
    $ajax = false;
    require_once "./controller/gestionController.php";
    require_once "./models/main.php";
    $gestion = new gestionController();
    $main = new Main();

    // Lista de productos
    $lista = $gestion->ListarProductos();

    $admin = "";
    if(!isset($_SESSION['usuario'])){
        $admin = "login";
    }else{
        $admin = "admin";
    }
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
                <a class="nav-login" href="<?php echo $admin ?>">Admin</a>
            </div>
        </div>
    </nav>
</header>
<div class="principios">
    <p>Nuestros principales productos</p>
</div>
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
    </div>
    <?php } ?>
</div>
<footer class="footer">
    <div class="logo-footer">
        <p>Logo</p>
    </div>
    <div>
        <div class="footer-list">
            <div>Productos</div>
            <div>Nosotros</div>
            <div>Tiendas</div>
        </div>
    </div>
    <div>
        <p>Nuestras redes sociales</p>
        <div class="redes-cont">
            <div class="redes-s"><a href="#"><img src="<?php echo SERVERURL ?>view/assets/img/redes/733547.png" alt=""></a></div>
            <div class="redes-s"><a href="#"><img src="<?php echo SERVERURL ?>view/assets/img/redes/733558.png" alt=""></a></div>
            <div class="redes-s"><a href="#"><img src="<?php echo SERVERURL ?>view/assets/img/redes/733561.png" alt=""></a></div>
        </div>
    </div>
</footer>