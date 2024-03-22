<?php 
session_start();
if(isset($_POST['submit']))
{
    $error = false;
    if(!empty($_POST['in_name']))
    {
        $income = $_POST['in_name'];
    }
    else
    {
        $income_error = "Please, enter income category";
        $error = true;
    }
    $parent = $_POST['parent'];
    if(!empty($parent))
    {
        if($parent==1){
            $parent = $parent_category;
        }
        elseif($parent==2){
            $parent_category = $parent;
        }
        else {
            $parent_category = $parent;
        }
    }
    else
    {
        $parent_error ="Please, choose parent category";
        $error = true;
    }
    if(!$error)
    {
        $_SESSION['in_name']= $income;
        header ('Location: income_list.php');
       //header('Location: income_list.php?in_name=' .$income.'&parent'.$parent);  
    }
}

?>

<?php include_once 'layout/sidebar.php'?>
<?php include_once 'layout/header.php' ?>

<div>
    <form action="" class="m-3" method="post">
        <div>
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="in_name" value="<?php if(isset($income)) echo $income; ?>">
            <span class="text-danger"><?php if(isset($income_error)) echo $income_error;?></span>
        </div>
        <div >
            <label for="" class="form-label">Parent Category</label>
            <select  id="category" class="form-select" name="parent" value="<?php if(isset($parent_category)) echo $parent_category; ?>">
                <option value="">Select One</option>
                <option value="1" name=" "<?php if(isset($parent) && $parent== '1') echo 'selected'?> >income category1</option>
                <option value="2" name=" " <?php if(isset($parent) && $parent== '1') echo 'selected'?> >income category2</option>
                <option value="3" name=" "<?php if(isset($parent) && $parent== '1') echo 'selected'?> >income category3</option>
            </select>
            <span class="text-danger"><?php if(isset($parent_error)) echo $parent_error; ?></span>
        </div>
        <div>
            <label for="" class="form-label">Remark</label>
            <input type="text" class="form-control" name="remark" value="<?php if(isset($remark)) echo $remark; ?>">
        </div>
        <div>
            <button class="btn btn-success mt-5" name="submit">submit</button>
        </div>
    </form>
</div>

<?php include_once 'layout/footer.php'?>