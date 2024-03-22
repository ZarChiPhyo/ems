<?php 
include_once './model/departmentModel.php';

class DepartmentController{

    private $department;
    function __construct()
    {
        $this->department = new Department();
    }

    function getDepartment(){
        return $this->department->getDepartment();
    }
}

?>