<?php
    require_once "../../classes/Connection.php";
    $connection = new Connection();
    $connection = $connection->connection();
    $sql = "SELECT contacts.contact_first_surname AS contact_first_surname, contacts.contact_second_surname AS contact_second_surname, contacts.contact_names AS contact_names, contacts.contact_phone_number AS contact_phone_number, contacts.contact_email AS contact_email, categories.category_name AS category_name, contacts.contact_id AS contact_id  FROM contacts_table AS contacts INNER JOIN categories_table AS categories ON contacts.category_id = categories.category_id";
    $result = mysqli_query($connection, $sql);
?>
<div class="card  rounded-0">
    <div class="card-body">
        <table class="table table-hover table-condensed table-bordered table-responsive-sm" id="contacts_table_DataTable">
            <thead>
                <tr>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre(s)</th>
                    <th>Telefóno</th>
                    <th>Email</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($show_data = mysqli_fetch_array($result)){
                        $contact_id = $show_data['contact_id'];
                ?>
                <tr>
                    <td><?php echo $show_data['contact_first_surname'];?></td>
                    <td><?php echo $show_data['contact_second_surname'];?></td>
                    <td><?php echo $show_data['contact_names'];?></td>
                    <td><?php echo $show_data['contact_phone_number'];?></td>
                    <td><?php echo $show_data['contact_email'];?></td>
                    <td><?php echo $show_data['category_name'];?></td>
                    <td>
                        <span class="btn btn-warning" onclick="get_contact_data('<?php  echo $contact_id;?>')" data-toggle="modal" data-target="#modal_update_contact">
                            <span class="far fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-danger" onclick="delete_contact('<?php  echo $contact_id;?>')">
                            <span class="fas fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(() => {
        $("#contacts_table_DataTable").DataTable();
    });
</script>