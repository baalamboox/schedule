<div class="modal fade" id="modal_add_contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_add_contact">
                    <div class="form-group">
                        <div id="category_id"></div>
                    </div>
                    <div class="form-group">
                        <label for="contact_names">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="contact_names" name="contact_names" placeholder="Ingresa nombre" required="">
                    </div>
                    <div class="form-group">
                        <label for="contact_first_surname">Apellido Paterno</label>
                        <input type="text" class="form-control form-control-sm" id="contact_first_surname" name="contact_first_surname" placeholder="Ingresa apellido paterno" required="">
                    </div>
                    <div class="form-group">
                        <label for="contact_second_surname">Apellido Materno</label>
                        <input type="text" class="form-control form-control-sm" id="contact_second_surname" name="contact_second_surname" placeholder="Ingresa apellido materno" required="">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone_number">Telefono</label>
                        <input type="text" class="form-control form-control-sm" id="contact_phone_number" name="contact_phone_number" placeholder="Ingresa telefóno" required="">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="email" class="form-control form-control-sm" id="contact_email" name="contact_email" placeholder="Ingresa email" required="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-block">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="save_contact">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#category_id').load("view/contacts/select-categories.php");
    });
</script>