<?php 
    include 'database.php';
    $idCliente = $_GET['id'];
    if($idCliente == ""){
        header("location: inicio.php");
    }else{
        if(!is_numeric($idCliente)){
            header("location: inicio.php");
        }
    }
        $foto = "";
        $classRemove = 'notBlock';

        $clientes = "SELECT * FROM datos WHERE id = '$idCliente'";
        $datos_cliente = mysqli_query($conexion, $clientes);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultura Perú | Editar Perfil</title>
    <link rel="icon" href="assets/img/0001.png">
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/editar-perfil.css?2.8">
    <link rel="stylesheet" href="assets/css/icons.css?1.2">
</head>
<body>
    <?php while($fila_cliente = mysqli_fetch_array($datos_cliente)){ 
    if($datos_usuario['foto'] != "foto_perfil.png"){
    $classRemove = "";
    $foto = '<img class="img" id="img" src="'.$fila_cliente['foto'].'" alt="Foto de Perfil">';
    }
    ?>
    <nav class="menu">
        <div class="contenedor">
            <ul class="seccion-a clasic">
                <a href="index.html" class="clasic">
                    <img src="assets/img/0001.png" alt="Logotipo de Agricultura Perú">
                    <h1>Agricultura <span>Perú</span></h1>
                </a>
            </ul>
            <ul class="seccion-b clasic">
                <img id="btnmenu" src="<?php echo $fila_cliente['foto'] ?>" alt="Foto de Usuario">
                <div id="menu-detalle" class="menu-detalle">
                    <div class="seccion-a"></div>
                    <div class="seccion-b">
                        <a href="editar-perfil.php">Editar Perfil</a>
                        <a href="carrito.php">Mi Carrito</a>
                        <a href="index.php">Cerrar Sesión</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <h1 class="title special">Editar Perfil</h1>
    <section class="contenedor formulario">
        <form action="proceso_editar.php" method="post" class="formulario" enctype="multipart/form-data">
            <div class="container-perfil">
                <div class="containerFoto">
                    <h1 class="datos_perfil"><?php echo $fila_cliente['name'] ?></h1>
                    <h1 class="datos_perfil"><?php echo $fila_cliente['email'] ?></h1>
                    <label class="foto" for="foto"><h3 id="texto" class="texto"></h3><?php echo $foto; ?></label>
                    <div class="upimg">
                        <input type="file" name="foto" id="foto">
                        <div required onclick="document.getElementById('foto').click()">Actualizar Foto</div>
                        <span class="borrarFoto <?php echo $classRemove; ?>"><p>Eliminar Foto</p></span>
                    </div>
                </div>  
            </div>
            <input type="hidden" name="id" value="<?php echo $fila_cliente['id'];?>">
            <section class="datos">
                <div class="box">
                    <div>
                        <label for="dni" class="icon-id-card"></label>
                        <input id="dni" type="text" class="input" name="dni" placeholder="DNI" value="">
                    </div>
                    <div>
                        <label for="name" class="icon-user"></label>
                        <input id="name" type="text" class="input" name="name" placeholder="Nombres y Apellidos" value="<?php echo $fila_cliente['name'];?>">
                    </div>
                    <div>
                        <label for="email" class="icon-mail-alt"></label>
                        <input id="email" type="text" class="input" name="email" placeholder="Email" value="<?php echo $fila_cliente['email'];?>">
                    </div>
                    <div>
                        <label for="telefono" class="icon-phone"></label>
                        <input id="telefono" type="text" class="input" name="telefono" placeholder="Teléfono" value="">
                    </div>
                    <div>
                        <label for="direccion" class="icon-location-1"></label>
                        <input id="direccion" type="text" class="input" name="direccion" placeholder="Dirección" value="">
                    </div>
                    <div>
                        <label for="password" class="icon-lock-1"></label>
                        <input id="password" type="password" class="input" name="password" placeholder="Password" value="<?php echo $fila_cliente['password'];?>">
                        <span id="eye" class="icon-eye"></span>
                    </div>
                    <?php } ?>
                    <input type="submit" value="Aceptar cambios" class="btn-aceptar">
                </div>
            </section>    
        </form>
    </section>
    <h3 class="text-social">Encuéntranos en:</h3>
    <div class="social-net contenedor">
        <span><a href="" class="icon-facebook"></a></span>
        <span><a href="" class="icon-mail-alt"></a></span>
        <span><a href="" class="icon-wspt"></a></span>
        <span><a href="" class="icon-youtube-play"></a></span>
        <span><a href="" class="icon-twitter"></a></span>
        <span><a href="" class="icon-instagram"></a></span>
    </div>
    <footer class="contenedor">
        <h1>Copyright © 2021 Agricultura Perú. Todos los Derechos Reservados.</h1>
    </footer>
</body>
<script type="text/javascript">
    $(document).ready(function(){
    $("#btnmenu").click(function(){
    $("#menu-detalle").each(function() {
        displaying = $(this).css("display");
        if(displaying == "flex") {
        $(this).fadeOut('slow',function() {
            $(this).css("display","none");
        });
        } else {
        $(this).fadeIn('slow',function() {
            $(this).css("display","flex");
        });
        }
    });
    });
    });
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/cargaArchivo.js"></script>
<script src="assets/js/borrarFoto.js"></script>
<script src="assets/js/script.js"></script>
</html>