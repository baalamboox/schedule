<?php
    require_once '../../classes/Contacts.php';
    $contacts = new Contacts();
    $data = array(
        'contact_id' => $_POST['update_contact_id'],
        'contact_names' => $_POST['update_contact_names'], 
        'contact_first_surname' => $_POST['update_contact_first_surname'], 
        'contact_second_surname' => $_POST['update_contact_second_surname'], 
        'contact_phone_number' => $_POST['update_contact_phone_number'], 
        'contact_email' => $_POST['update_contact_email'],
        'category_id' => $_POST['select_category_id']
     );
     echo $contacts->update_contact($data);
?>