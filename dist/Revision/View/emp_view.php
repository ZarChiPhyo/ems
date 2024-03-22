<?php 

include_once '../Controller/empController.php';

$id = $_GET['id'];
$emps = new empController();
$employee = $emps->getEmpId($id);


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
            <div class="row">
                <table class="table table-striped table-success">
                    <thead>
    `                   <th>Hire Date</th>
                        <th>Job Id</th>
                        <th>Manager Id</th>
                        <th>Department Id</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php 
                        
                        foreach($employee as $emp){
                            if($emp['employee_id']=$id){
                                $results = $emp;
                                break;
                            }
                        }
                        echo "<tr>";
                        echo "<td>".$results['hire_date']."</td>";
                        echo "<td>".$results['job_id']."</td>";
                        echo "<td>".$results['manager_id']."</td>";
                        echo "<td>".$results['department_id']."</td>";
                        echo "<td><a href='revision1.php' class='btn btn-dark mx-2'>Back</a></td>";
                        echo "</tr>";

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>