$(document).ready(() => {
    $("#contact_table_load").load('view/contacts/contacts_table.php');
    $('#save_contact').click(() => {
        if($('#category_id_select').val() == 0) {
            swal({
                title: '¡Upps!',
                text: 'Debes de agregar una categoría.',
                icon: 'warning',
                dangerMode: true,
            });
            return false;
        }
        add_contact();
    });
    $('#save_update_contact').click(() => {
        update_contact();
    });
});

function add_contact() {
    $.ajax({
        type: 'POST',
        url: 'processes/contacts/add-contacts.php',
        data: $('#form_add_contact').serialize(),
        success: result => {
            result = result.trim();
            if(result == 1) {
                $('#form_add_contact')[0].reset();
                $('#contact_table_load').load('view/contacts/contacts_table.php');
                swal('¡Genial!', 'Contacto agregado con éxito.', 'success');
            } else {
                swal('¡Upps!', 'No se agrego el contacto.', 'error')
            }
        }
    });
}
function delete_contact(contact_id) {
    swal({
        title: '¿Estas seguro de eliminar este contacto?',
        text: 'Una vez eliminado no podra ser recuperado.',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                type: 'POST',
                url: "processes/contacts/delete-contacts.php",
                data: {
                    'contact_id': contact_id
                },
                success: result => {
                    result = result.trim();
                    if(result == 1) {
                        $('#contact_table_load').load('view/contacts/contacts_table.php');
                        swal('¡Genial!', 'Se elimino correctamente el contacto.', 'success');
                    } else {
                        swal('¡Upps!', 'No se elimino correctamente el contacto.', 'error');
                    }
                }
            });
        }
    });
}
function get_contact_data(contact_id) {
    $.ajax({
        type: 'POST',
        url: "processes/contacts/get-data-contacts.php",
        data: {
            'contact_id': contact_id
        },
        success: result => {
            result = $.parseJSON(result);
            let category_id = result['category_id'];
            $('#update_contact_names').val(result['contact_names']);
            $('#update_contact_first_surname').val(result['contact_first_surname']);
            $('#update_contact_second_surname').val(result['contact_second_surname']);
            $('#update_contact_phone_number').val(result['contact_phone_number']);
            $('#update_contact_email').val(result['contact_email']);
            $('#update_contact_id').val(result['contact_id']);
            $('#update_select_category').load('view/contacts/select-categories-update.php?category_id=' + category_id);
        }
    });
}
function update_contact() {
    $.ajax({
        type: 'POST',
        url: 'processes/contacts/update-contacts.php',
        data: $('#form_update_contact').serialize(),
        success: result => {
            result = result.trim();
            if(result == 1) {
                $('#contact_table_load').load('view/contacts/contacts_table.php');
                $('#modal_update_contact').modal("toggle");
                swal('¡Genial!', 'Se actualizo correctamente el contacto.', 'success');
            } else {
                swal('¡Upps!', 'Error al actualizar el contacto.', 'error')
            }
        }
    });
}