  
<?php
session_start();
echo session_id();
echo "<br>";
//echo $_SESSION['in_name'];

if (isset($_POST['submit'])) {

    $error = false;
    if (!empty($_POST['exp_name'])) {
        $exp_name = $_POST['exp_name'];
    } else {
        $exp_error = "Please enter expense name";
        $error = true;
    }

    if (!empty($_POST['parent'])) {
        $parent = $_POST['parent'];
    } else {
        $parent_error = "Please enter parent name";
        $error = true;
    }

    if (!$error) {
        header('Location: exp_list.php?name=' . $exp_name . '&parent=' . $parent);
    }
}

?>
 <?php  include_once 'layout/sidebar.php';?>
<?php include_once 'layout/header.php'; ?> 
<div class="body">
    <div class="container">
        <form method="post">
            <div class="mt-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="exp_name" id="" class="form-control" value="<?php if (isset($exp_name)) echo $exp_name; ?>">
                <span class="text-danger">
                    <?php
                    if (isset($exp_error)) echo $exp_error;
                    ?>
                </span>
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Parent Category</label>
                <input type="text" name="parent" id="" class="form-control" value="<?php if (isset($parent)) echo $parent; ?>">
                <span class="text-danger">
                    <?php
                    if (isset($parent_error)) echo $parent_error
                    ?>
                </span>
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Remark</label>
                <input type="text" name="remark" id="" class="form-control">
            </div>
            <div class="my-3">
                <button class="btn btn-primary" name="submit">Add</button>
            </div>
        </form>
    </div>

</div>

<?php include_once 'layout/footer.php' ?>