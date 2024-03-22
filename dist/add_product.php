<?php 
session_start();

$product = [];

$product['photo'] = $_POST['photo'];
$product['name'] = $_POST['name'];
$product['price'] = $_POST['price'];



array_push($_SESSION['products'],$product);
//print_r($_SESSION['products']);
//var_dump($_SESSION['invoices']);
echo "success";


?>