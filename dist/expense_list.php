<?php 
 include_once 'layout/sidebar.php';
?>
<?php include_once 'layout/header.php'; ?>
<div>
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>
    <div class="row">
    <div class="col-md-3"><?php echo $_GET['expense']; ?></div>
    <div class="col-md-3"><?php echo $_GET['category']; ?></div>
    <div class="col-md-3"><?php echo $_GET['amount']; ?></div>
    <div class="col-md-3"><?php echo $_GET['date']; ?></div>
    </div> 
</div>
<?php include_once 'layout/footer.php';?>