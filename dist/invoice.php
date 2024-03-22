<?php 
session_start();
include_once 'layout/sidebar.php';
$_SESSION['invoices'] = []; 
?>
<?php include_once 'layout/header.php' ?>
<div class="main">
    <div class="row mb-3 m-2 justify-content-between">
        <div class="col-md-3">
            <button class="btn btn-primary btnAdd">Add</button>
        </div>
        <div class="col-md-3">
            <a href="invoice_list.php" class="btn btn-success">Go To Invoice List</a>
        </div>
    </div>
    <form action="" id="invoiceForm">
        <div class="row m-2">
        <div class="col-md-3">
            <input type="text" name="username" class="cname form-control" id="" placeholder="Enter Username" class="form-control">
        </div>
        <div class="col-md-3">
            <input type="date" name="date" class="cdate form-control" id="" class="form-control">
        </div>
        </div>
        <div class="invoice">
            <div class="row m-2">
                <div class="col-md-3">
                    <input type="text" name="product[]" id="" class="form-control title">
                </div>
                <div class="col-md-2">
                    <input type="text" name="price[]" id="" class="form-control price">
                </div>
                <div class="col-md-2">
                    <input type="text" name="qty[]" id="" class="form-control qty">
                </div>
                <div class="col-md-3">
                    <input type="text" name="subTotal[]" id="" class="form-control subtotal">
                </div>
            </div>
        </div>
        <div class="row m-2 align-items-center">
            <div class="col-md-3">
                <button class="btn btn-info btnSubmit">Submit</button>
            </div>
            <div class="col-md-2">
                <label for="" class="form-label">Balance</label>
                <input type="number" name="balance" id="" class="form-control balance">
            </div>
            <div class="col-md-2 discount">
                <label for="" class="form-label">Discount</label>
                <input type="number" name="discount" id="" class="form-control discount">
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Total</label>
                <input type="number" name="total" id="total" class="form-control">
            </div>
        </div>
    </form>
</div>
<?php include_once 'layout/footer.php' ?>
