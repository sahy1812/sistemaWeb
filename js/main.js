/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('#contenido').load('vistas/inicio.php');
    var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
    $('#usuarios').click(function () {
        $('#contenido').load('vistas/usuarios.php');
    });
    $('#home').click(function () {
        $('#contenido').load('vistas/inicio.php');
    });
});
$("#form-login").submit(function (event) {
    $('#respuesta_login').html('');
    var parametros = $(this).serialize();
    $.ajax({
        type: 'post',
        url: 'php/login.php',
        data: parametros,
        beforeSend: function () {
            $("body").addClass('loading');
        },
        success: function (data) {
            $("#respuesta_login").html(data).fadeIn('slow');
            $("body").removeClass('loading');
        }
    });
    event.preventDefault();
});
