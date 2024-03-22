<?php 
include_once '../Controller/empController.php';

$emps = new empController();
$employees = $emps->getEmp();
//var_dump($employees);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="main">
    <div class="container">
        <table class="table table-striped table-success">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                
                foreach($employees as $emp){
                    echo "<tr>";
                    echo "<td>".$emp['employee_id']."</td>";
                    echo "<td>".$emp['first_name'].$emp['last_name']."</td>";
                    echo "<td>".$emp['email']."</td>";
                    echo "<td>".$emp['phone_number']."</td>";
                    echo "<td>".$emp['salary']."</td>";
                    echo "<td><a href='emp_view.php?id={$emp['employee_id']}' class='btn btn-success'>View</a><a href='' class='btn btn-warning'>Edit</a><a href='' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>



