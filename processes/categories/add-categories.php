<?php
    require_once '../../classes/Categories.php';
    $categories = new Categories();
    $data = array(
        'category_name' => $_POST['category_name'],
        'category_description' => $_POST['category_description']
    );
    echo $categories->add_category($data);
?>