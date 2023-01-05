<?php
    require_once '../../classes/Connection.php';
    $connection = new Connection();
    $connection = $connection->connection();
    $sql = 'SELECT category_id, category_name, category_description FROM categories_table';
    $result = mysqli_query($connection, $sql);
?>
<div class="card rounded-0">
    <div class="card-body">
        <table class="table table-hover table-condensed table-bordered table-responsive-sm" id="categories_table_DataTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($show_data = mysqli_fetch_array($result)) {
                        $category_id = $show_data['category_id'];
                ?>
                        <tr>
                            <td><?php echo $show_data['category_name'];?></td>
                            <td><?php echo $show_data['category_description'];?></td>
                            <td>
                                <span onclick="get_category_data('<?php echo $category_id;?>')" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_update_category">
                                    <span class="far fa-edit"></span>
                                </span>
                            </td>
                            <td>
                                <span class="btn btn-danger btn-sm" onclick="delete_category('<?php echo $category_id;?>')">
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
        $('#categories_table_DataTable').DataTable();
    });
</script>