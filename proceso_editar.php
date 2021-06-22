<?php

    include 'database.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $contrasena_encriptada = password_hash($password, PASSWORD_BCRYPT);
    $conf_password = $contrasena_encriptada;


    /* FOTO DE PERFIL */
        $ruta_temporal_foto = $_FILES["foto"]["tmp_name"];

        $directorio_foto = "fotos/";

        $foto = $directorio_foto . basename($_FILES["foto"]["name"]);
        // OBTENEMOS EL TIPO DE DATO CON PATHINFO_EXTENSION
        $tipoArchivo_foto = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
        $verificarimg = getimagesize($_FILES["foto"]["tmp_name"]);

        $rutafoto = $foto;

            if(move_uploaded_file($ruta_temporal_foto, $foto)){

                $rutafoto = $foto;

                $cliente = "UPDATE datos SET foto = '$rutafoto' ,name = '$name', email = '$email', telefono = '$telefono', direccion = '$direccion', dni = '$dni', password = '$password', conf_password ='$conf_password' WHERE id = '$id'";
                $datos_cliente = mysqli_query($conexion, $cliente);
                if($datos_cliente){
                    echo "<script> 
                        alert('Actualización Exitosa');
                    </script>";   
                    header('Location: inicio.php?id='.urlencode($id)); 
                } 
            }
          
?>