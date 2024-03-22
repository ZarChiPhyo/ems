
<?php
    session_start();
    $products = $_SESSION['products'];
    // echo "<pre>";
    //     print_r($products);
    // echo "</pre>";
?>
<?php  include_once 'layout/sidebar.php'?>
<?php include_once 'layout/header.php' ?> 
<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-info" id="cartList">
                    <tbody>
                        <?php
                            foreach($products as $index => $product) {
                                echo "<tr>";
                                    echo "<td>";
                                        echo "<img src=". $product['photo'] .">";
                                    echo "</td>";
                                    echo "<td class='text-center align-middle'>";
                                        echo "<p>". $product['name']. "</p>";
                                    echo "</td>";
                                    echo "<td class='text-center align-middle'>";
                                        echo "<p>". $product['price'] ."</p>";
                                    echo "</td>";
                                    echo "<td class='text-center align-middle'>";
                                        echo "<div class='btn-group'>";
                                            echo "<span class='btn btn-outline-dark'>-</span>";
                                            echo "<span class='p-2'>0</span>";
                                            echo "<span class='btn btn-outline-dark'>+</span>";
                                        echo "</div>";
                                    echo "</td>";
                                    echo "<td class='text-center align-middle'>";
                                        echo "<button class='btn btn-outline-danger removeBtn' value='$index'>Remove</button>";
                                    echo "</td>";
                                echo "</tr>";
                                    
                            }
                            // for($index=0; $index<count($products); $index++) {
                            //     echo "<tr>";
                            //         echo "<td>";
                            //             echo "<img src=". $products[$index]['image'] .">";
                            //         echo "</td>";
                            //         echo "<td class='text-center align-middle'>";
                            //             echo "<p>". $products[$index]['name']. "</p>";
                            //         echo "</td>";
                            //         echo "<td class='text-center align-middle'>";
                            //             echo "<p>". $products[$index]['price'] ."</p>";
                            //         echo "</td>";
                            //         echo "<td class='text-center align-middle'>";
                            //             echo "<div class='btn-group'>";
                            //                 echo "<span class='btn btn-outline-dark'>-</span>";
                            //                 echo "<span class='p-2'>0</span>";
                            //                 echo "<span class='btn btn-outline-dark'>+</span>";
                            //             echo "</div>";
                            //         echo "</td>";
                            //         echo "<td class='text-center align-middle'>";
                            //             echo "<button class='btn btn-outline-danger removeBtn' id='$index'>Remove</button>";
                            //         echo "</td>";
                            //     echo "</tr>";
                            // }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <?php
                    echo "<div class='card bg-light'>";
                            echo "<div class='card-body'>";
                                echo "<h4 class='pb-3'>Order Summary</h4>";
                                $total=0;
                                $subtotal=0;
                                $shop_fee = "2500 Kyats";
                                $fee = intval($shop_fee);
                                foreach($products as $product) {
                                    $price = intval($product['price']);
                                    $subtotal += $price;
                                }
                               
                                // for($index=0;$index<count($products); $index++) {
                                //     $price = intval($products[$index]['price']);
                                //     $subtotal += $price;

                                // }
                                $total = $subtotal + $fee;
                                echo "<div class='mb-3'>";
                                    echo "<span>";
                                    echo "Subtotal (".sizeof($products). " Items)";
                                    echo "</span>";
                                    echo "<span class='float-end'>". $subtotal ." Kyats</span>";
                                echo "</div>";
                                
                                echo "<div class='mb-3'>";
                                    echo "<span> Shopping Fee</span>";
                                    echo "<span class='float-end'>". $shop_fee . "</span>";
                                echo "</div>";
                                
                                echo "<div class='mb-2'>";
                                    echo "<span> Total</span>";
                                    echo "<span class='float-end'>". $total ." Kyats</span>";
                                echo "</div>";
                            echo "</div>";
                            echo "<button class='btn btn-outline-info'>Proceed To Checkout</button>";
                    echo "</div>";
                ?>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/products.js"></script>
<?php include_once 'layout/footer.php' ?>
