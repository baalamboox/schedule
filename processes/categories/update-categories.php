<?php 
    require_once  '../../classes/Categories.php';
    $categories = new categories();
    $data = array (
        'category_id' => $_POST['category_id_update'],
        'category_name' => $_POST ['category_name_update'],
        'category_description' => $_POST ['category_description_update']
    );
    echo  $categories->update_category($data);
?>