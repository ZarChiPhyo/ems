<?php 
include_once 'controller/employeeController.php';
$emp_data = new EmployeeController();
$empDatas = $emp_data->getEmployee();

if(isset($_POST['export'])){
    $filename=('txt_excel.xls');
    header('Content-Disposition:attachment;filename='.$filename);
    header('Content-Type:application/vnd.ms-excel');

    echo "Testing....\t Name \tAge";
    exit();
}
if(isset($_GET['status'])){
    echo "<div class='alert alert-success'>New Employee is successfully added</div>";
}
//  echo "<pre>";
//  print_r($empDatas);
//  echo "<pre>";
include_once 'layout/sidebar.php';
include_once 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            
            <form action="" method="post">
                <button class="btn btn-primary" name="export">Export Excel</button>
            </form>
        </div>
        <!-- <div class="col-md-2">
            <a href="add_employee.php" class="btn btn-dark">Add New Employee</a>
        </div> -->
    </div>
    <div class="row">
        <table class="table table-striped table-success text-center" id="emps">
            <thead>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php 
                foreach($empDatas as $emp){
                    echo "<tr id=".$emp['employee_id'].">";
                    echo "<td>".$emp['employee_id']."</td>";
                    echo "<td>".$emp['first_name']."</td>";
                    echo "<td>".$emp['last_name']."</td>";
                    echo "<td>".$emp['email']."</td>";
                    echo "<td>".$emp['phone_number']."</td>";
                    echo "<td><a href='emp_detail.php?id=".$emp['employee_id']."' class='btn btn-success mx-2'>view </a></td>";
                    echo "</tr>";
                }
                ?>
                <!-- <a class='btn btn-warning mx-2'>Edit</a><a class='btn btn-danger mx-2'>Delete</a><a class='btn btn-success mx-2 verify' >verify </a> -->
            </tbody>
        </table>
    </div>
</div>

<?php 

include_once 'layout/footer.php';

?>