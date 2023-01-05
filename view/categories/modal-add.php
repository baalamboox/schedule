<div class="modal fade" id="modal_add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_add_category">
                    <div class="form-group">
                        <label for="category_name">Nombre:</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="category_description">Descripción:</label>
                        <textarea class="form-control" id="category_description" name="category_description" placeholder="Ingresa descripción" cols="15" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-block">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="save_category">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>