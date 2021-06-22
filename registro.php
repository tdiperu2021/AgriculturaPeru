<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agricultura Perú | Registro</title>
    <?php include('components/shared/meta.php');?>
    <link rel="stylesheet" href="assets/css/login.css?1.4">
    <script src="assets/js/jquery-latest.js"></script>
	<script src="assets/js/jquery.min.js"></script>
    <link href="assets/css/alertify.min.css" rel="stylesheet"/>
    <script src="assets/js/alertify.min.js"></script>
</head>
<body>
    <?php include('components/shared/menu.php');?>
    <h1 class="title special">Registro</h1>
    <section class="contenedor formulario">
        <form action="subir.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="redes">
                <button><span class="icon-facebook"></span>Regístrese con Facebook</button>
                <button><span class="icon-google"></span>Regístrese con Google</button>
            </div>
            <div>
                <span class="icon-user"></span>
                <input name="name" class="input" type="text" placeholder="Ingrese sus nombres y apellidos" required>
            </div>
            <div>
                <span class="icon-file-image"></span>
                <input name="foto" id="file" type="file"  onchange="return validarExt()" required>
                <button class="input button" required onclick="document.getElementById('file').click()">Subir foto de perfil</button>
            </div>
            <div>
                <span class="icon-mail-alt"></span>
                <input name="email" class="input" type="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div>
                <span class="icon-lock-1"></span>
                <input name="password" id="password" class="input" type="password" placeholder="Crea tu contraseña" required>
                <span id="eye" class="icon-eye"></span>
            </div>
            <div>
                <span class="icon-lock-1"></span>
                <input name="conf_password" id="passwordb" class="input" type="password" placeholder="Confirme su contraseña" required>
                <span id="eyeb" class="icon-eye"></span>
            </div>
            <input type="submit" value="Registrarme">
            <h3>¿Ya tienes una cuenta? <a href="iniciar-sesion.php">Inicia Sesión</a></h3>
        </form>
    </section>
    <?php include('components/shared/footer.php');?>
</body>
<script src="assets/js/script.js"></script>
<script src="assets/js/script2.js"></script>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('file');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Hubo un error al momento de subir su foto de perfil..');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                alertify.success('Su foto de perfil se subió correctamente.');
                visor.onload = function(e) 
                { 
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>