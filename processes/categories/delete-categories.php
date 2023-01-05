<?php
    require_once '../../classes/Categories.php';
    $categories = new Categories();
    $category_id = $_POST['category_id'];
    echo $categories->delete_category($category_id);
?>