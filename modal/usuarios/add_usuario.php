<div id="addUsuarioModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="add_usuario" id="add_usuario">
                <div class="modal-header">						
                    <h4 class="modal-title text-center">Agregar Personal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name_personal"  id="name_personal" class="form-control" required pattern="[A-Za-zñÑ]+" title="Solo son permitidas letras">
                    </div>
                    <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" name="apellido_paterno_personal"  id="apellido_paterno_personal" class="form-control" required pattern="[A-Za-zñÑ]+" title="Solo son permitidas letras">
                    </div>
                    <div class="form-group">
                        <label>Apellido Materno</label>
                        <input type="text" name="apellido_materno_personal"  id="apellido_materno_personal" class="form-control" required pattern="[A-Za-zñÑ]+" title="Solo son permitidas letras">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion_personal"  id="direccion_personal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono_personal"  
                               id="telefono_personal" class="form-control" required
                               minlength="10" maxlength="10" pattern="[0-9]+"
                               title="Solo se permiten Números [0-9]">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email_personal"  id="email_personal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" name="select_cargo" 
                                onchange="if (this.value === '1') {
                                            document.getElementById('usuario_registro').style.display = 'block';
                                        } else {
                                            document.getElementById('usuario_registro').style.display = 'none';
                                        }">
                            <option value="">--Selecciona--</option>
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                            <option value="3">Cobrador</option>
                        </select>
                    </div>
                    <div id="usuario_registro" style="display: none">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="usuario_personal"  id="usuario_personal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password_personal"  id="password_personal" class="form-control">
                        </div>
                    </div>
                </div>
                <div id="respuesta_usuarios_modal" class="container-fluid"></div><!-- Carga de datos ajax aqui -->
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" >
                    <input type="submit" class="btn btn-success" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
</div>