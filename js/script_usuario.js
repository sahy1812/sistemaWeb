/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//evento del submit 
$("#add_usuario").submit(function (event) {
    $("#respuesta_usuarios").html('');
    $("#respuesta_usuarios_modal").html('');
    //obtiene los datos de los inputs y crea un json
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "php/usuarios/add_usuario.php",
        data: parametros,
        beforeSend: function () {
            $("#respuesta_usuarios").html("Enviando...");
        },
        success: function (datos) {
            $("#respuesta_usuarios").html(datos);
            $("#respuesta_usuarios_modal").html(datos);
            //$('#addUsuarioModal').modal('hide');
        }
    });
    event.preventDefault();
});