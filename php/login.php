<?php

include './mensajes.php';
$user = $_POST['usuario'];
$password = $_POST['password'];
sleep(1);
if (!empty($user) && !empty($password)) {
    if ($user == "sahy1812") {
        if ($password == "sahy1812.-") { 
            session_start();
            $_SESSION["autentificado"] = true;
            echo'<script language="javascript">window.location="administrador.php"</script>';
        } else {
            error('Contraseña incorrecta');
        }
    } else {
        error('Usuario incorrecto');
    }
} else {
    error('Rellena todos los campos');
}

