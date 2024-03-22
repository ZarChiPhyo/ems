<?php 
session_start();
//echo "<pre>";
//var_dump($_POST['price']);

//echo "<pre>";

$invoice = [];
$count = sizeof($_POST['price']);
$price = $_POST['price'];
$title = $_POST['title'];
$qty = $_POST['qty'];
$name = $_POST['cname'];
$date = $_POST['cdate'];
if($count>0){
    $invoice['name'] = $name;
    $invoice['date'] = $date;
    for($index = 0; $index<$count; $index++){
        $product[$index] = [$title[$index], $price[$index], $qty[$index]];
    }
    $invoice['product'] = $product;

    array_push($_SESSION['invoices'],$invoice);
    //print_r($_SESSION['invoices']);
    //var_dump($_SESSION['invoices']);
    echo "success";
}


?>