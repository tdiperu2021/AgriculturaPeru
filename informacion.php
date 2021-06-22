<?php

    session_start();

    include_once 'database.php';

    if(!isset($_SESSION['usuario_id']) && !isset($_SESSION['usuario_name']) && !isset(($_SESSION['usuario_email']))){
        header('Location: inicio_sesion.php');
    }

    $id = $_SESSION['usuario_id'];
    $name = $_SESSION['usuario_name'];
    $email = $_SESSION['usuario_email'];
    $password = $_SESSION['usuario_password'];
    
    /* ---------------------------------EVITAR INGRESAR SIN LOGEO CLIENTE------------------------------------- */
    /* if(!isset($_SESSION['usuario_id']) && !isset($_SESSION['usuario_email']) && !isset(($_SESSION['usuario_name']))){
        header('Location: inicio_sesion.php');
    } */

    // Reemplazar la variable $id por el dato enviado por el usuario $_SESSION[usuario_id]
    

?>