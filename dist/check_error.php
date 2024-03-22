<!-- 
<?php 
if(isset($_POST['submit'])){
    var_dump($_FILES);
    $fileError = $_FILES['file']['error'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileInfo = explode('.',$fileName);
    $fileType = end($fileInfo);
    $allowTypes = ['jpg','png','svg','webp'];

    try{
        if($fileError == 0)
        {
            throw new Exception("There is no error");
            if((in_array($fileType,$allowTypes)))
            {
                throw new Expection("allowed file ");

                if($fileSize<2000000){

                    $f_name = time().$fileName;
                    if(move_uploaded_file($_FILES['file']['tmp_name'],'upload_image/'.$f_name))
                    {
                        echo "success upload file";
                    }
                    else{
                        echo "Image size is exceeded";
                    } 
                }
            } 
            else
            {
                throw new Exception("this file is not allowed");
            }
        }
        else
        {
            throw new Exception("!Error");
        }       
    }
catch(Exception $e)
    {
        echo $e->getMessage();
    }
    finally 
    {
        echo "Finish";
    }
}

?>
<?php 
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
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
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <label for="" class="form-label">File</label>
                <input type="file" class="form-control" name="file">
            </div>
            <div>
                <button class="btn btn-dark my-3" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php 
include_once 'layout/footer.php';
?> -->