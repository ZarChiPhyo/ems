<?php 
if(isset($_POST['submit'])){
    $error = false;
    if(!empty($_POST['expense']))
    {
        $expense = $_POST['expense'];
    }
    else
    {
        $expense_error = "Please, enter income category";
        $error = true;
    }
    if(!empty($_POST['category']))
    {
        $category = $_POST['category'];
    }
    else
    {
        $category_error ="Please, choose parent category";
        $error = true;
    }
    if(!empty($_POST['amount']))
    {
        $amount = $_POST['amount'];
    }
    else
    {
        $amount_error ="Please, choose parent category";
        $error = true;
    }
    if(!empty($_POST['date']))
    {
        $date = $_POST['date'];
    }
    else
    {
        $date_error ="Please, choose parent category";
        $error = true;
    }
    if(!$error)
    {
       header('Location: expense_list.php?expense=' .$expense.'&category='.$category. '&amount='. $amount. '&date='. $date);  
    }
}

?>


<?php include_once 'layout/sidebar.php'?>
<?php include_once 'layout/header.php' ?>

<div>
    <form action="" class="m-3" method='post'>
        <div>
            <label for="" class="form-label" >Expense Name</label>
            <input type="text" class="form-control" name="expense" value="<?php if (isset($expense)) echo $expense; ?>">
            <span class="text-danger"><?php if(isset($income_error)) echo $expense_error;?></span>
        </div>
        <div>
            <label for="" class="form-label" >Category</label>
            <input type="text" class="form-control" name="category" value="<?php if (isset($category)) echo $category; ?>">
            <span class="text-danger"><?php if(isset($category_error)) echo $category_error;?></span>
        </div>
        <div>
            <label for="" class="form-label" >Amount</label>
            <input type="number" class="form-control" name="amount" value="<?php if (isset($amount)) echo $amount; ?>">
            <span class="text-danger"><?php if(isset($amount_error)) echo $amount_error;?></span>
        </div>
        <div>
            <label for="" class="form-label" >Date</label>
            <input type="text" class="form-control" name="date" value="<?php if (isset($date)) echo $date;?>">
            <span class="text-danger"><?php if(isset($date_error)) echo $date_error;?></span>
        </div>
        <div>
            <button class="btn btn-success mt-5" name="submit">submit</button>
        </div>
    </form>
</div>

<?php include_once 'layout/footer.php'?>