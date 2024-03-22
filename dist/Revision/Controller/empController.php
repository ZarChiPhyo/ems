<?php 

include_once '../Model/empModel.php';

class empController{

    private $emp;
    function __construct()
    {
        $this->emp = new empModel();
    }

    public function getEmp(){
      return  $this->emp->getEmp();
    }

    public function getEmpId($id){
      return $this->emp->getEmpId($id);
    }
}

?>