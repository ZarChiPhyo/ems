<?php 
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
include_once 'controller/jobController.php';

$id = $_GET['id'];
$job_controller = new JobController();
$job_result = $job_controller->getJobs();
//echo "<pre>";
//print_r($job_result);
//echo "<pre>";
?>

<div class="main">
    <div class="row">
        <div class="col-md-12">
            <?php 
            
            foreach($job_result as $job){
                if($job['job_id']==$id){
                    $new_job = $job;
                    break;
                }
            }
            //var_dump($job);
            echo "<h2> Job Title:".$new_job['job_title']."</h2>";
            echo "<h2> Min Salary:".$new_job['min_salary']."</h2>";
            echo "<h2> Max Salary:".$new_job['max_salary']."</h2>";
            ?>
        </div>
    </div>
    <!-- <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Min Salary</th>
                <th>Max Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($job_result as $job){
                echo "<tr>";
                echo "<td>".$job['job_id']."</td>";
                echo "<td>".$job['job_title']."</td>";
                echo "<td>".$job['min_salary']."</td>";
                echo "<td>".$job['max_salary']."</td>";
                echo "<td><a class='btn btn-success mx-2' href='job.php?id=".$job['job_id']."'>View</a><a class='btn btn-warning mx-2'>Edit</a><a class='btn btn-danger mx-2'>Delete</a></td>";
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table> -->
</div>

<?php 
include_once 'layout/footer.php';
?>