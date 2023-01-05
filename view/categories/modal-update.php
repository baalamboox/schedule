<div class="modal fade" id="modal_update_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_update_category">
                    <input type="text" id="category_id_update" name="category_id_update" hidden="">
                    <div class="form-group">
                        <label for="category_name_update">Nombre:</label>
                        <input type="text" id="category_name_update" name="category_name_update" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category_description_update">Descripción:</label>
                        <textarea class="form-control" id="category_description_update" name="category_description_update" cols="15" rows="5" ></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-block">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="update_category">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>