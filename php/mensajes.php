<?php

function exito($msj) {
    ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Exito!</strong>&nbsp; <?php echo $msj; ?>
    </div>
    <?php
}

function error($msj) {
    ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Error!</strong>&nbsp; <?php echo $msj; ?>
    </div>
    <?php
}
