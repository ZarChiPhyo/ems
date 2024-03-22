<?php 
include_once './controller/employeeController.php';
$emp_controller = new EmployeeController();
$result = $emp_controller->getChartData();
//var_dump($result);
// $output ="";
// foreach($result as $emp ){
//     echo $output= $emp['department_id'].",".$emp['total_emps'];
// }
// echo $output;

echo json_encode($result);
?>