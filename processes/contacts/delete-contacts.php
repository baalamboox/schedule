<?php
    require_once '../../classes/Contacts.php';
    $contacts = new Contacts();
    $contact_id = $_POST['contact_id'];
    echo $contacts->delete_contact($contact_id);
?>