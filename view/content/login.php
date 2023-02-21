<div>
    <form class="" action="" method="POST">
        <div class="campos-form">
            <div class="campos-placeholder">
                <input type="text" name="usuario" id="usuario" required>
                <label for="usuario">usuario</label>
            </div>
            <div class="campos-placeholder">
                <input type="password" name="password" id="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="button-form btn1">
                <button type="submit" name="iniciarsesion">Iniciar sesión</button>
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['iniciarsesion'])) {
    require_once "./controller/logincontroller.php";
    $login = new logincontrolador();
    echo $login->iniciar_sesion_controlador();
}
?>