<?php 
 include_once 'layout/sidebar.php';
?>
<?php include_once 'layout/header.php'; ?>
<div>
    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>"; 
    echo $_GET['name'];
    echo $_GET['parent'];
    ?>
</div>

<?php include_once 'layout/footer.php';?>