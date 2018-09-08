<?php
if (session_start()) {
    session_destroy();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
        <link rel="stylesheet" href="css/booststap.min.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/login.css" rel="stylesheet">
        <link rel="stylesheet" href="fonts.css">
        <link rel="stylesheet" href="css/beforeSend.css">
    </head>
    <body>
        <div class="wrapper">

            <form class="form-signin" id="form-login" name="form-login"> 
                <center>
                    <img src="img/logo.png" class="img-responsive" width="50%">
                </center>
                <h2 class="form-signin-heading text-center">LOGIN</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
                </div>
                <label class=" form-group">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recuérdame
                </label>
                <div id="respuesta_login"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">INGRESAR</button>   
            </form>
        </div>
    </body>
    <div id="load"></div>
</html>
<script src="js/main.js"></script>


