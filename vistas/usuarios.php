<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2><i class="icon-cart">&nbsp;</i>Administrar <b>Personal</b></h2>
            </div>

            <div class="col-sm-12 text-center">
                <a href="#addUsuarioModal" class="btn btn-success" data-toggle="modal" onclick="$('#add_usuario')[0].reset();">
                    <i class="icon-plus">&nbsp;</i> 
                    <span>Add Personal</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class='col-sm-4 pull-right'>
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" class="form-control" placeholder="Buscar Usuario"  id="q" onkeyup="loadUsuarios(1);" />
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button" onclick="loadUsuarios(1);">
                        <span class="icon-search"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class='clearfix'></div>
    <hr>
    <div id="respuesta_usuarios"></div><!-- Carga de datos ajax aqui -->
    <div class='out_usuarios'></div><!-- Carga de datos ajax aqui -->
</div>
<!-- Add Modal HTML usuarios -->
<?php include("../modal/usuarios/add_usuario.php"); ?>
<script src="js/script_usuario.js"></script>



