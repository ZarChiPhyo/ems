<?php 


include_once 'controller/employeeController.php';
include_once 'controller/jobController.php';
include_once 'controller/deparmentController.php';

$dep = new DepartmentController();
$depDatas = $dep->getDepartment();

$job_controller = new JobController();
$jobDatas = $job_controller->getJobs();

$emp_data = new EmployeeController();
$empDatas = $emp_data->getEmployee();

if(isset($_POST['submit'])){
    //var_dump("Hello");
    $error = false;
    if(!empty($_POST['firstname'])){
        $firstname = $_POST['firstname'];
    }
    else{
        $error = true;
        $firstname_error = "Please enter your first name";
    }
    if(!empty($_POST['lastname'])){
        $lastname = $_POST['lastname'];
    }
    else{
        $error = true;
        $lastname_error = "Please enter your last name";
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }
    else{
        $error = true;
        $email_error = "Please enter your email";
    }
    if(!empty($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    else{
        $error = true;
        $phone_error = "Please enter your phone";
    }
    if(!empty($_POST['hiredate'])){
        $hiredate = $_POST['hiredate'];
    }
    else{
        $error = true;
        $hiredate_error = "Please enter your hire date";
    }
    if(!empty($_POST['salary'])){
        $salary = $_POST['salary'];
    }
    else{
        $error = true;
        $hiredate_error = "Please enter your salary";
    }
    $job = $_POST['job'];
    $manager = $_POST['manager'];
    $department = $_POST['department'];
    //var_dump($error);
    if(!$error){
        $status = $emp_data->addEmployee($firstname,$lastname,$email,$phone,$hiredate,$salary,$job,$manager,$department);
        //var_dump($status);
        if($status){
            $message = "success";
            header('location:employee.php?status='.$message);
        }
    }
    
}
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-2 float-right">
            <a href="employee.php" class="btn btn-dark">Back</a>
        </div>
        <div>
        <form action="" method="post">
            <div>
                <label for="" class="form-label" >First Name</label>
                <input type="text" class="form-control" name="firstname">
            </div>
            <div>
                <label for="" class="form-label" >Last Name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div>
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div>
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div>
                <label for="" class="form-label">Hire Date</label>
                <input type="date" class="form-control" name="hiredate">
            </div>
            <div>
                <label for="" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <div>
                <label for="" class="form-label">Job Title</label>
                <select name="job" id="" class="form-select">
                    <!-- <option value="">Please Select Job Title</option> -->
                    <?php 
                        foreach($jobDatas as $job){
                            echo "<option value=".$job['job_id'].">".$job['job_title']."</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div>
                <label for="" class="form-label">Manager</label>
                <select name="manager" id="" class="form-select">
                    <!-- <option value="">Please Select Manager</option> -->
                    <?php 
                        foreach($empDatas as $emp){
                            echo "<option value=".$emp['employee_id'].">".$emp['first_name'].$emp['last_name']."</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div>
                <label for="" class="form-label">Department</label>
                <select name="department" id="" class="form-select">
                    <!-- <option value="">Please Select Department</option> -->
                    <?php 
                        foreach($depDatas as $dep){
                            echo "<option value=".$dep['department_id'].">".$dep['department_name']."</option>";
                        }
                    
                    ?>
                </select>
            </div>
            <div class="mt-3">
                <button class="btn btn-dark" name="submit">Add</button>
            </div>
        </form>
        </div>
        
    </div>
</div>

<?php 

include_once 'layout/footer.php';

?>