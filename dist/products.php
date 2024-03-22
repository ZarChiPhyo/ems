<?php 
ob_start();
$products = [
    ["photo" => "assets/img/sunflower.jpg", "name" => "Sunflower", "price" => "15000" ],
    ["photo" => "assets/img/rose1.png", "name" => "Rose", "price" => "20000" ],
    ["photo" => "assets/img/orchid.jpg", "name" => "Orchid", "price" => "60000" ],
    ["photo" => "assets/img/tulip.png", "name" => "Tulip", "price" => "45000" ],
    ["photo" => "assets/img/Lily.png", "name" => "Lily", "price" => "33000" ],
    ["photo" => "assets/img/lilac2.png", "name" => "Lilac", "price" => "50000" ],
    ["photo" => "assets/img/carnation1.jpg", "name" => "Carnation", "price" => "15000" ],
    ["photo" => "assets/img/aster.jpg", "name" => "Aster", "price" => "20000" ]
];

?>

<?php
 session_start();
 $_SESSION['products'] = []; 
include_once 'layout/sidebar.php';
include_once 'layout/header.php';


?>
<div class="main">
    <div class="container">
        <div class="row justify-content-between navigation">
            <div class="col-md-5 d-flex">
                <h2 class="align-self-center">Your Floral</h2>
                <img src="assets/img/logo4.jpg" alt="" class="rounded-circle" height="80px" width="90px">
            </div>
            <div class="col-md-2">
                <a href="cart_list.php"><svg class="cart" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                </svg></a>
                <span class="count">0</span>
            </div>
        </div>
        <div class="row products my-5">
            <?php 
                foreach($products as $item){
                    echo "<div class='col-md-3 productItem'>";
                    foreach($item as $key=>$detail){
                        if($key == 'photo'){
                            echo "<img src='$detail' width='90%' class='photo'>";
                        }
                        elseif($key == 'name'){
                            echo "<h4 class='text-center mt-2 name'>$detail</h4>";
                        }
                        else{
                            echo "<div class='text-center price'>".$detail." Kyats</div>";
                        }     
                    }
                    echo "<button class='btn btn-dark add_cart'>Add To Cart</button>";
                    echo "</div>";
                }
            ?>
        </div>    
    </div>
</div>
<!-- <script src="js/jquery-3.7.1.min.js"></script> -->
<script src="js/products.js"></script>
<?php 
include_once 'layout/footer.php';
?>