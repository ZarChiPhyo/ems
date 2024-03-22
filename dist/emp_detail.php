<?php 

include_once 'layout/sidebar.php';
include_once 'layout/header.php';
include_once 'controller/employeeController.php';

$id = $_GET['id'];
$emp_data = new EmployeeController();
$empDatas = $emp_data->getEmployee();
//  echo "<pre>";
//  print_r($empDatas);
//  echo "<pre>";

?>

<div class="container">
    <div class="row">
        <div class="text-center text-success">
            <?php 
            foreach($empDatas as $emp){
                if($emp['employee_id']==$id){
                    $new_datas = $emp;
                    break;
                }
            }
             echo "<h2>".$new_datas['first_name']. "'s Info</h2>";
            ?>
        </div>
        <table class="table table-striped table-success text-center">
            <thead>
                <th>Hire Date</th>
                <th>Job Title</th>
                <th>Salary</th>
                <th>Department</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php 
                // foreach($empDatas as $emp){
                //     if($emp['employee_id']==$id){
                //         $new_datas = $emp;
                //         break;
                //     }
                // }
                // echo "<pre>";
                // var_dump($emp);
                // echo "<pre>";
                echo "<tr>";
                echo "<td>".$new_datas['hire_date']."</td>";
                echo "<td>".$new_datas['job_title']."</td>";
                echo "<td>".$new_datas['salary']."</td>";
                echo "<td>".$new_datas['department_name']."</td>";
                echo "<td><a href='employee.php' class='btn btn-dark mx-2'>Back</a></td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php 

include_once 'layout/footer.php';

?>