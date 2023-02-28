<div class="login">
    <form class="" action="" method="POST" class="login-form">
        <div class="campos-form">
            <div class="campos-placeholder">
                <div class="input-field">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required>
                </div>
            </div>
            <div class="campos-placeholder">
                <div class="input-field">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required>
                </div>
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