<?php 
session_start();
include_once 'layout/sidebar.php';
include_once "layout/header.php";

print_r($_SESSION['invoices']);
$invoices = $_SESSION['invoices']
?>
<div class="main">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>customer</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 

             for($index=0; $index<sizeof($invoices); $index++){
                  $total = 0;
                  $qty = 0;
                  echo "<tr>";
                  echo "<td>".($index+1)."</td>";
                  echo "<td>" .$invoices[$index]['name']."</td>";
                  echo "<td>" .$invoices[$index]['date']."</td>";
                  for($count=0; $count<sizeof($invoices[$index]['product']); $count++){
                      $invoice = $invoices[$index]['product'];
                      $total += ($invoice[$count][1]*$invoice[$count][2]);
                      $qty += $invoice[$count][2];
                  }
                 
                 //echo "<td>$invoices[0]</td>";
                 //echo "<td>$invoices[1]</td>";
                 echo "<td> $qty </td>";
                 echo "<td> $total </td>";
                 echo "</tr>";
             }
            
            ?>
        </tbody>
    </table>
</div>
<?php 
include_once 'layout/footer.php';
?>