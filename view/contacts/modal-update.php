<div class="modal fade" id="modal_update_contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_update_contact">
                    <div class="form-group">
                        <div id="update_select_category"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="update_contact_id" name="update_contact_id" hidden="">
                    </div>
                    <div class="form-group">
                        <label for="update_contact_names">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="update_contact_names" name="update_contact_names" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="update_contact_first_surname">Apellido Paterno</label>
                        <input type="text" class="form-control form-control-sm" id="update_contact_first_surname" name="update_contact_first_surname" placeholder="Ingrese apellido paterno">
                    </div>
                    <div class="form-group">
                        <label for="update_contact_second_surname">Apellido Materno</label>
                        <input type="text" class="form-control form-control-sm" id="update_contact_second_surname" name="update_contact_second_surname" placeholder="Ingrese apellido materno">
                    </div>
                    <div class="form-group">
                        <label for="update_contact_phone_number">Telefono</label>
                        <input type="text" class="form-control form-control-sm" id="update_contact_phone_number" name="update_contact_phone_number" placeholder="Ingrese telefóno">
                    </div>
                    <div class="form-group">
                        <label for="update_contact_email">Email</label>
                        <input type="text" class="form-control form-control-sm" id="update_contact_email" name="update_contact_email" placeholder="Ingrese email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-block">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="save_update_contact">Actualizar</button>
                </div>
                
            </div>
        </div>
    </div>
</div>