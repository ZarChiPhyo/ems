<?php 
session_start();
 include_once 'layout/sidebar.php';
?>
<?php include_once 'layout/header.php'; ?>
<div>
    <?php

    echo $_SESSION['in_name'];
    echo "<br>";
    //echo $_SESSION['parent'];
    
    session_unset(); //delete session variable 
    var_dump($_SESSION);
    echo "<br>";
    echo "id".session_id();
    echo "<br>";
    session_destroy(); //delete session
    echo "id".session_id();
    echo "<br>";
    
    ?>
</div>

<?php include_once 'layout/footer.php';?>