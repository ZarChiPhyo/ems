<?php 

include_once '../Include/db.php';

class empModel{

    private $con,$statement;

    public function getEmp(){
        $this->con = Database::connection();
        $sql = "select * from employees";
        $this->statement = $this->con->prepare($sql);
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($results);
            return $results;    
        };
       
    }

    public function getEmpId($id){
        
        $this->con = Database::connection();
        $sql = "select * from employees where employee_id=:id";
        $this->statement = $this->con->prepare($sql);
        $this->statement->bindParam(":id",$id);
        //$this->statement->execute();
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($results);
            return $results;    
        };
    }
}

?>