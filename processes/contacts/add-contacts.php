<?php
    require_once '../../classes/Contacts.php';
    $contacts = new Contacts();
    $data = array(
        'category_id' => $_POST['category_id_select'],
        'contact_names' => $_POST['contact_names'], 
        'contact_first_surname' => $_POST['contact_first_surname'], 
        'contact_second_surname' => $_POST['contact_second_surname'], 
        'contact_phone_number' => $_POST['contact_phone_number'], 
        'contact_email' => $_POST['contact_email']
     );
     echo $contacts->add_contact($data);
?>