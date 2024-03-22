<?php 


include_once './controller/jobController.php';

$job_controller = new JobController;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $job = $job_controller->getJobId($id);
}
if(isset($_POST['update'])){
    $error = false;
    if(!empty($_POST['job_title'])){
        $job_title = $_POST['job_title'];
    }
    else{
        $error = true;
        echo "u have to fill something";
    }
    if(!empty($_POST['min_salary'])){
        $min_salary = $_POST['min_salary'];
    }
    else{
        $error = true;
    }
    if(!empty($_POST['max_salary'])){
        $max_salary = $_POST['max_salary'];
    }
    else{
        $error = true;
    }
    if(!$error){
        $status = $job_controller->updateJob($id,$job_title,$min_salary,$max_salary);
        if($status){
            header('location:job_list.php?status=success');
        }
    }
}

include_once 'layout/sidebar.php';
include_once 'layout/header.php';
?>
<div class="main">
    <div class="col-ms-3">
        <a href="job_list.php" class="btn btn-dark">Back</a>
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="">
                <label for="" class="form-label">Job Title</label>
                <input type="text" class="form-control"  name="job_title" value="<?php echo $job['job_title']?>">
            </div>
            <div class="">
                <label for="" class="form-label">Min Salary</label>
                <input type="text" class="form-control"  name="min_salary" value="<?php echo $job['min_salary']?>">
            </div>
            <div class="">
                <label for="" class="form-label">Max Salary</label>
                <input type="text" class="form-control"  name="max_salary" value="<?php echo $job['max_salary']?>">
            </div>
            <div class="col-md-4 mt-2">
                 <button class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
    </div>
</div>
<?php 
include_once 'layout/footer.php';
?>
