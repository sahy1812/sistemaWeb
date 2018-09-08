<?php
include '../mensajes.php';
$name = $_POST['name_personal'];
$apellido_paterno = $_POST['apellido_paterno_personal'];
$apellido_materno = $_POST['apellido_materno_personal'];
$direccion = $_POST['direccion_personal'];
$telefono = $_POST['telefono_personal'];
$email = $_POST['email_personal'];
$cargo = $_POST['select_cargo'];
$usuario = $_POST['usuario_personal'];
$password = $_POST['password_personal'];
//validamos que los datos recibidos no vengan vacios
if (!(empty($name) &&
        empty($apellido_paterno) &&
        empty($apellido_materno) &&
        empty($direccion) &&
        empty($telefono) && empty($email))) {
    //cargo se valida aparte porque no se xD
    if(!$cargo==''){
        //validamos el email html es tonto y no lo hace ¬¬
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //empieza lo bueno fierro pariente 
        }else{
            error('Email invalido');
        }
    }else{
        error('Seleciona un cargo');
    }
}else{
    error('No pueden haber campos vacios');
}

