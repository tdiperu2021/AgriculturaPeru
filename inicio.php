<?php
    include 'database.php';
    include_once "informacion.php";
    $productos = "SELECT * FROM productos";
    $idCliente = $id;
    $clientes = "SELECT * FROM datos WHERE id = '$idCliente'";
    $datos_cliente = mysqli_query($conexion, $clientes);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agricultura Perú | Inicio</title>
    <?php include('components/shared/meta.php');?>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/inicio.css?1.3">
</head>
<body>
    <?php while($fila_cliente = mysqli_fetch_array($datos_cliente)){ ?>
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
                        <a href="editar-perfil.php?id=<?php echo $id;?>">Editar Perfil</a>
                        <a href="carrito.php">Mi Carrito</a>
                        <a href="index.php">Cerrar Sesión</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <?php } ?>
    <h1 class="title special">Nuestros Productos</h1>
    <section class="contenedor productos">
    <?php $resultado= mysqli_query($conexion, $productos);
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="item">
            <img src="<?php echo $row["foto"];?>" alt="Imagen Referencial del Producto">
            <h1><?php echo $row["titulo"];?></h1>
            <div class="price">
                <span>S/&nbsp;<?php echo $row["precioActual"];?></span>
                <span>S/&nbsp;<?php echo $row["precioOriginal"];?></span>
            </div>
            <div class="btn">
                <a href=""><span class="icon-basket"></span>Agregar al Carrito</a>
            </div>
        </div>
    <?php }?>
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
</html>