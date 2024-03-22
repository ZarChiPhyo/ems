<?php
    session_start();
    $_SESSION['products'] = [];
    $products = [
        [
            "name" => "Bag for Lunch Box",
            "price" =>5000,
            "image" => "assets/img/products/bagforlunchbox.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Apple Ball Pen",
            "price" => 3750,
            "image" => "assets/img/products/appleballpen.webp",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Solar Emergency Charging Lamp with power bank",
            "price" => 3000,
            "image" => "assets/img/products/solarcharginglamp.webp",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Hameron Eye Drops",
            "price" => 6500,
            "image" => "assets/img/products/hameron.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Bosston BOS-Q6W8",
            "price" => 7700,
            "image" => "assets/img/products/wirelessmouse.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "2 layers necklace gold heart pendant chain necklace fashion Korean style women jewelry",
            "price" => 4422,
            "image" => "assets/img/products/necklace.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Star Master LED Starry Sky Projector Lamp Night Light",
            "price" => 2000,
            "image" => "assets/img/products/starmaster.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Mamee Chicken Mi Gorang 55gmx5S",
            "price" => 2250,
            "image" => "assets/img/products/mamee.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Asiko Brand Broom",
            "price" => 5200,
            "image" => "assets/img/products/broom.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "JM solution Derma Care Cantella Repair Toner",
            "price" => 2000,
            "image" => "assets/img/products/jmsolutioncare.jpg",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "Griptok Caravan Crew phone mount",
            "price" => 8628,
            "image" => "assets/img/products/caravan.png",
            // "btn" => "Add to cart"
        ],
        [
            "name" => "BMS Lithium Battery Charger Protection Board(12V)",
            "price" => 4400,
            "image" => "assets/img/products/bmschargerprotection.jpg",
            // "btn" => "Add to cart"
        ]
    ];
?>
<?php  include_once 'layout/sidebar.php'?>
<?php include_once 'layout/header.php' ?> 
<div class="body">
    <div class="container">
        <div class="row">
            <a href="kadd_list.php" class="btn btn-info w-25 mb-3">Add to Cart Lists</a>
        </div>
        <div class="row">
            <?php
                foreach($products as  $product) {
                    echo "<div class='col-md-2 card'>";
                    echo "<img src=".$product['image'] ." class='card-img-top img-fluid'>";
                    echo "<p class='text-truncate'>" . $product['name'] ."</p>";
                    echo "<span class='text-danger pb-3'>". $product['price'] . " Kyats" ."</span>";
                    echo "<button class='btn btn-danger mb-3 text-white add_cart'> Add to Cart </button>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

</div>
<?php include_once 'layout/footer.php' ?>
