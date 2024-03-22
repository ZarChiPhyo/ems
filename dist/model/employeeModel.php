<?php 
include_once './include/db.php';

class Employee{

    private $con,$statement;

    function getEmployee(){

        $this->con = Database::connect();
        $sql = "select employees.*, jobs.job_title , departments.department_name from employees JOIN jobs JOIN departments on employees.department_id = departments.department_id and employees.job_id = jobs.job_id";
        $this->statement = $this->con->prepare($sql);
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        };   
    }

    function getEmpId($id){
        $this->con = Database::connect();
        $sql = "select * from employees where employee_id=:id";
        $this->statement = $this->con->prepare($sql);
        $this->statement->bindParam(":id",$id);
        if($this->statement->execute()){
            $results = $this->statement->fetch(PDO::FETCH_ASSOC);//fetch for one row and fetchall for all rows
            return $results;
        };
    }

    function addEmployee($first,$last,$email,$phone,$hire_date,$salary,$job_title,$manager,$department){
        $this->con = Database::connect();
        $sql = "insert into employees(first_name,last_name,email,phone_number,hire_date,job_id,salary,manager_id,department_id) 
        VALUES (:firstname,:lastname,:email,:phone,:hdate,:title,:salary,:manager,:department)";
        $this->statement = $this->con->prepare($sql);
        $this->statement -> bindParam(':firstname',$first);
        $this->statement -> bindParam(':lastname',$last);
        $this->statement -> bindParam(':email',$email);
        $this->statement -> bindParam(':phone',$phone);
        $this->statement -> bindParam(':hdate',$hire_date);
        $this->statement -> bindParam(':salary',$salary);
        $this->statement -> bindParam(':title',$job_title);
        $this->statement -> bindParam(':manager',$manager);
        $this->statement -> bindParam(':department',$department);
        return $this->statement->execute();
    }

    function getChartData(){
        $this->con = Database::connect();
        $sql = "select departments.department_name,count(*) as total_emps from employees join departments where employees.department_id=departments.department_id group by departments.department_id";
        $this->statement = $this->con->prepare($sql);
        if($this->statement->execute()){
            $results = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        };   

    }

    function getBarData(){
        $this->con = Database::connect();
        $sql = "select 
        sum(case when salary BETWEEN 0 and 2500 then 1 else 0 end) as salary_0_2500,
        sum(case when salary BETWEEN 2500 and 5000 then 1 else 0 end) as salary_2500_5000,
        sum(case when salary BETWEEN 5000 and 7500 then 1 else 0 end) as salary_5000_7500,
        sum(case when salary BETWEEN 7500 and 10000 then 1 else 0 end) as salary_7500_10000,
        sum(case when salary BETWEEN 10000 and 12500 then 1 else 0 end) as salary_10000_12500
        from employees";
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