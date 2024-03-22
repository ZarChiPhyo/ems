<?php 
include_once './include/db.php';

class Department{

    private $con,$statement;

    function getDepartment(){

        $this->con = Database::connect();
        $sql = "select departments.* from departments";
        $this->statement = $this->con->prepare($sql);
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        };   
    }
}

// $data = new Employee();
// var_dump($data->getEmployee());


?>