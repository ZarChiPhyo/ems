<?php 
    session_start();
    $product_items = [];
    $product_items['name'] = $_POST['productName'];
    $product_items['price'] = $_POST['productPrice'];
    $product_items['image'] = $_POST['productImage'];
    array_push($_SESSION['products'], $product_items);
    // echo "<pre>";
    //     print_r($_SESSION['products']);
    // echo "</pre>";
    echo "success";
    
?>