<?php
    require_once '../../classes/Categories.php';
    $categories = new Categories();
    $category_id = $_POST['category_id'];
    echo json_encode($categories->get_category_data($category_id));
?>