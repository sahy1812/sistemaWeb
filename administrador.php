<?php
include "php/sesion.php";
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
        <title>SAHY</title>
        <link rel="stylesheet" href="css/booststap.min.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/main.css" rel="stylesheet">
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="fonts.css">

    </head>
    <body>

        <div id="wrapper">
            <div class="overlay"></div>
            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">

                        <a href="#">
                            SAHY
                        </a>
                    </li>
                    <li>
                        <a href="#" id="home"><i class="icon-home">&nbsp;</i>Inicio</a>
                    </li>
                    <li>
                        <a href="#" id="usuarios"><i class="icon-users">&nbsp;</i>Usuarios</a>
                    </li>
                    <li>
                        <a href="#" id="productos"><i class="icon-price-tags">&nbsp;</i>Productos</a>
                    </li>
                    <li>
                        <a href="#" id="categoria"><i class="icon-ticket">&nbsp;</i>Categorias</a>
                    </li>
                    <li>
                        <a href="#" id="clientes"><i class="icon-address-book">&nbsp;</i>Clientes</a>
                    </li>

                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    <li>
                        <a href="#">Administración</a>
                    </li>
                    <li>
                        <a href=""><i class="icon-switch">&nbsp;</i>Salir</a>
                    </li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->            
            <div id="page-content-wrapper">                
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>

                <div class="container-fluid" id="contenido">                                           

                </div>                
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
</html>
