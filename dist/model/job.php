<?php 
include_once './include/db.php';

class Job{
    private $con,$statement,$statement1;
    function getJobs(){
        $this->con = Database::connect();
        $sql = "select * from jobs";
        $this->statement = $this->con->prepare($sql);//prepare statement
        $this->statement->execute();
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);//fetch for one row and fetchall for all rows
            return $results;
        };//sql run  
    }

    function getJobId($id){
        $this->con = Database::connect();
        $sql = "select * from jobs where job_id=:id";
        $this->statement = $this->con->prepare($sql);
        $this->statement->bindParam(":id",$id);
        if($this->statement->execute()){
            $results = $this->statement->fetch(PDO::FETCH_ASSOC);//fetch for one row and fetchall for all rows
            return $results;
        };
    }

    function updateJob($id,$job_title,$min_salary,$max_salary){
        $this->con = Database::connect();
        $sql = "UPDATE jobs SET job_title=:title, min_salary=:min, max_salary=:max where job_id=:id";
        $this->statement = $this->con->prepare($sql);
        $this->statement->bindParam(":id",$id);
        $this->statement->bindParam(":title",$job_title);
        $this->statement->bindParam(":min",$min_salary);
        $this->statement->bindParam(":max",$max_salary);
        return $this->statement->execute();
    }

    public function deleteJob($id){
        
        $status="deleted";
        $this->con = Database::connect();
        
        $sql1 = "select * from employees where job_id=:id";
        $this->statement1 = $this->con->prepare($sql1);
        $this->statement1->bindParam(":id",$id);
        if($this->statement1->execute()){
            $employees = $this->statement1->fetchAll(PDO::FETCH_ASSOC);
            if(sizeof($employees)== 0){
                $sql = "update jobs set deleted_at=:status where job_id=:id";
                //$sql = "delete from jobs where job_id=:id";
                $this->statement = $this->con->prepare($sql);
                $this->statement->bindParam(":id",$id);
                $this->statement->bindParam(":status",$status);
                return $this->statement->execute();
            }
            return false;
        };
   
    }

    public function filter($min,$max){
        $this->con = Database::connect();
        $sql = "select * from jobs where min_salary>=:min and max_salary<=:max";
        $this->statement = $this->con->prepare($sql);
        $this->statement->bindParam(":min",$min);
        $this->statement->bindParam(":max",$max);
        if($this->statement->execute()) {
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        };
    }

}

?>