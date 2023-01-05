<?php
    require_once '../../classes/Contacts.php';
    $contacts = new Contacts();
    $contact_id = $_POST['contact_id'];
    echo json_encode($contacts->get_contact_data($contact_id));
?>