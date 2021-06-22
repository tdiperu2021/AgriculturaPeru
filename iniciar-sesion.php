<?php
    include "database.php";
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $registros = "SELECT id,name, email, password FROM datos WHERE email = '$email'";
        $buscar_registros = mysqli_query($conexion, $registros);
        $datos_usuario = mysqli_fetch_array($buscar_registros);
        $contrasena = $datos_usuario['password'];
        if($password === $contrasena){
            $_SESSION['usuario_id'] = $datos_usuario['id'];
            $_SESSION['usuario_name'] = $datos_usuario['name'];
            $_SESSION['usuario_email'] = $datos_usuario['email'];
            $_SESSION['usuario_password'] = $datos_usuario['password'];
            header ("location: inicio.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agricultura Perú | Iniciar Sesión</title>
    <?php include('components/shared/meta.php');?>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <?php include('components/shared/menu.php');?>
    <h1 class="title special">Iniciar Sesión</h1>
    <section class="contenedor formulario">
        <form action="iniciar-sesion.php" method="post">
            <div class="redes">
                <button><span class="icon-facebook"></span>Ingrese con Facebook</button>
                <button><span class="icon-google"></span>Ingrese con Google</button>
            </div>
            <div>
                <span class="icon-mail-alt"></span>
                <input name="email" class="input" type="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div>
                <span class="icon-lock-1"></span>
                <input name="password" id="password" class="input" type="password" placeholder="Ingrese su contraseña" required>
                <span id="eye" class="icon-eye"></span>
            </div>
            <h3>¿Olvidaste tu contraseña? <a href="">Haz clic aquí</a></h3>
            <input type="submit" value="Iniciar Sesión">
            <h3><a href="">Política de Privacidad</a></h3>
            <h3>¿Aún no tienes una cuenta? <a href="registro.php">Regístrate</a></h3>
        </form>
    </section>
    <?php include('components/shared/footer.php');?>
</body>
<script src="assets/js/script.js"></script>
</html>