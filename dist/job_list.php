<?php 
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
include_once 'controller/jobController.php';

$job_controller = new JobController();
$job_result = $job_controller->getJobs();
if(isset($_GET['status'])){
    $status = $_GET['status'];
    if($status=='success'){
        echo "<div class='alert alert-success'>Job is successfully updated</div>";
    }
    // else if($status=='fail'){
    //     echo "<div class='alert alert-danger'>can not delete</div>";
    // }
    else{
        echo "<div class='alert alert-danger'>Error in updating</div>";
    }
}


//echo "<pre>";
//print_r($job_result);
//echo "<pre>";
?>

<div class="main">
    <div class="row">
        <div class="col-md-12 ">
            <form action="" class="d-flex justify-space-between gap-3">
                <label for="min_salary" class="form-label">Min Salary</label>
                <input type="text" class="form-control" name="min" id="min_salary">
                <label for="max_salary" class="form-label">Max Salary</label>
                <input type="text" class="form-control" name="max" id="max_salary">
                <button class="btn btn-primary" id="filter">Filter</button>
            </form> 
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Min Salary</th>
                <th>Max Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="data-body">
            <?php
            foreach($job_result as $job){
                if($job['deleted_at']==null){
                    echo "<tr>";
                    echo "<td>".$job['job_id']."</td>";
                    echo "<td>".$job['job_title']."</td>";
                    echo "<td>".$job['min_salary']."</td>";
                    echo "<td>".$job['max_salary']."</td>";
                    echo "<td>
                    <a class='btn btn-success mx-2' href='job.php?id=".$job['job_id']."'>View</a>
                    <a class='btn btn-warning mx-2' href='edit_job.php?id=".$job['job_id']."'>Edit</a>
                    <a class='btn btn-danger mx-2' href='delete_job.php?id=".$job['job_id']."'>Delete</a></td>";
                    echo "</tr>";
                }
                
            }
            
            ?>
        </tbody>
    </table>
</div>

<?php 
include_once 'layout/footer.php';
?>