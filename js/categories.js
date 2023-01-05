$(document).ready(() => {
    $("#categories_table_load").load('view/categories/categories-table.php');
    $("#save_category").click(() => {
        if($('#category_name').val() == '') {
            swal({
                title: '¡Upps!',
                text: 'Debes de agregar una categoría.',
                icon: "warning",
                dangerMode: true
            });
            return false;
        } else {
            add_category();
        }
    });
    $("#update_category").click(() => {
        update_category();
    });
});
function add_category() {
    $.ajax({
        type: 'POST',
        url: 'processes/categories/add-categories.php',
        data: $('#form_add_category').serialize(),
        success: result => {
            result = result.trim();
            if(result == 1) {
                $('#form_add_category')[0].reset();
                $('#categories_table_load').load('view/categories/categories-table.php');
                swal('¡Genial!', 'Se agrego correctamente la categoría.', 'success');
            } else {
                swal("¡Upps!", "No se agrego correctamenta la categoría.", "error");
            }
        }
    });
}
function delete_category(category_id) {
    swal({
        title: '¿Estas seguro de eliminar esta categoría?',
        text: 'Una vez eliminada no podra ser recuperada.',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: 'POST',
                url: 'processes/categories/delete-categories.php',
                data: {
                    'category_id': category_id
                },
                success: result => {
                    result = result.trim();
                    if(result == 1) {
                        $('#categories_table_load').load('view/categories/categories-table.php');
                        swal('¡Genial!', 'Se elimino con éxito la categoría.', 'success');
                    } else {
                        swal("¡Upps!", "No se elimino con éxito la categoría.", "error")
                    }
                }
            });
        }
    });
}
function get_category_data(category_id) {
    $.ajax({
        type: 'POST',
        url: 'processes/categories/get-data-categories.php',
        data: {
            'category_id': category_id
        },
        success: result => {
            result = $.parseJSON(result);
            $('#category_id_update').val(result['category_id']);
            $('#category_name_update').val(result['category_name']);
            $('#category_description_update').val(result['category_description']);
        }
    });
}
function update_category() {
    $.ajax({
        type: 'POST',
        url: 'processes/categories/update-categories.php',
        data: $('#form_update_category').serialize(),
        success: result => {
            result = result.trim();
            if (result == 1) {
                $('#categories_table_load').load('view/categories/categories-table.php');
                swal('¡Genial!', 'Se actualizo correctamente la categoría.', 'success');
            } else {
                swal('¡Upps!', 'No se actualizo correctamente la categoría.', 'error');
            }
        }
    });
}