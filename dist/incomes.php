<?php 
if(isset($_GET['submit'])){
    $error = false;
    if(!empty($_GET['income_n']))
    {
        $income = $_GET['income_n'];
    }
    else
    {
        $income_error = "Please, enter income category";
        $error = true;
    }
    if(!empty($_GET['category']))
    {
        $category = $_GET['category'];
    }
    else
    {
        $category_error ="Please, choose parent category";
        $error = true;
    }
    if(!empty($_GET['amount']))
    {
        $amount = $_GET['amount'];
    }
    else
    {
        $amount_error ="Please, choose parent category";
        $error = true;
    }
    if(!empty($_GET['date']))
    {
        $date = $_GET['date'];
    }
    else
    {
        $date_error ="Please, choose parent category";
        $error = true;
    }
    if(!$error)
    {
       header('Location: income_list1.php?income_n=' .$income.'&category='.$category. '&amount='. $amount. '&date='. $date);  
    }
}

?>


<?php include_once 'layout/sidebar.php'?>
<?php include_once 'layout/header.php' ?>

<div>
    <form action="" class="m-3" method='get'>
        <div>
            <label for="" class="form-label" >Income Name</label>
            <input type="text" class="form-control" name="income_n" value="<?php if (isset($income)) echo $income; ?>">
            <span class="text-danger"><?php if(isset($income_error)) echo $income_error;?></span>
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