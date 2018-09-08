<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

//Evaluo que la sesion continue verificando una de las variables creadas en control.php, cuando esta ya no coincida con su valor inicial se redirije al archivo de salir.php
if (!$_SESSION["autentificado"]) {
    header("Location: php/salir.php");
}