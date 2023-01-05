<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contactos</title>
        <?php require_once 'dependencies.php';?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col">
                    <?php require_once 'menu.php'; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid text-center rounded shadow bg-white">
                        <h1 class="display-4 m-4">Contactos</h1>
                        <button class="btn btn-warning m-4" data-toggle="modal" data-target="#modal_add_contact"><span class="fas fa-user-plus"></span> Agregar contacto</button>
                        <div id="contact_table_load"></div>
                    </div>
                </div>
            </div>
            <?php
                require_once "view/contacts/modal-add.php";
                require_once "view/contacts/modal-update.php";
            ?>
        </div>
        <script src="js/contacts.js"></script>
    </body>

</html>