<?php 

include_once './controller/employeeController.php';
$emp_controller = new EmployeeController();
$results = $emp_controller->getBarData();
echo json_encode($results);

?>