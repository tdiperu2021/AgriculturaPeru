<?php 
    include 'database.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $contrasena_encriptada = password_hash($conf_password, PASSWORD_BCRYPT);
    $ruta_temporal_foto = $_FILES["foto"]["tmp_name"];
    $directorio_foto = "fotos/";
    $foto = $directorio_foto . basename($_FILES["foto"]["name"]);
    $tipoArchivo_foto = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
    $verificarimg = getimagesize($_FILES["foto"]["tmp_name"]);
    move_uploaded_file($ruta_temporal_foto, $foto);                               
    $rutafoto = $foto;
         $datos = "INSERT INTO datos(foto, name, email, telefono, direccion, dni, password, conf_password) VALUES('$rutafoto', '$name','$email', '', '', '','$password','$contrasena_encriptada')";
        $declarar_datos = mysqli_query($conexion, $datos);
        if($declarar_datos) {
            echo "
                <script> 
                    alert('REGISTRO EXITOSO');
                    window.location = 'iniciar-sesion.php'
                </script>";
        }
?>
