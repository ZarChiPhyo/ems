<?php 
//session_start();
include_once './model/employeeModel.php';

//$id = $_SESSION['id'];

class EmployeeController{

    private $employee;
    function __construct()
    {
        $this->employee = new Employee();
    }

    function getEmployee(){
        return $this->employee->getEmployee();
    }

    function getEmpId($id){
        return $this->employee->getEmpId($id);
    }
    
    function addEmployee($first,$last,$email,$phone,$hire_date,$salary,$job_title,$manager,$department){

            return $this->employee->addEmployee($first,$last,$email,$phone,$hire_date,$salary,$job_title,$manager,$department);
    }

    function conuntEmployee(){
        return sizeof($this->employee->getEmployee());
    }

    function getChartData(){
        return $this->employee->getChartData();
    }

    function getBarData(){
        return $this->employee->getBarData();
    }
}
?>