<?php 
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
?>
<?php 
if(isset($_POST['submit'])){
    var_dump($_FILES);
    $filename = $_FILES['payment']['name'];
    $filesize = $_FILES['payment']['size'];
    $fileinfo = explode('.',$filename);
    $filetype = end($fileinfo);
    $allowTypes = ['jpg','png','svg','webp'];
    if($_FILES['payment']['error'] == 0){
        if(in_array($filetype,$allowTypes)){
            if($filesize<2000000){

                $f_name = time().$filename;
                if(move_uploaded_file($_FILES['payment']['tmp_name'],'upload_image/'.$f_name)){
                    echo "success upload file";
                }
            }
            else{
                echo "Image size is exceeded";
            }
        }
        else{
            echo "Type is not allowed";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="m-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="m-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="m-3">
           <label for="amount" class="form-label">Amount</label> 
           <input type="number" class="form-control">
        </div>
        <div class="m-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="" id="" cols="90" rows="3" class="form-control"></textarea>
        </div>
        <div class="m-3">
            <label for="" class="form-label">Payment Slip</label>
            <input type="file" class="form-control" name="payment">
        </div>
        <div class="m-3">
            <button class="btn btn-dark" name="submit">Submit</button>
        </div>
    </form>
    </div>
    
</body>
</html>

<?php 
include_once 'layout/footer.php';
?>