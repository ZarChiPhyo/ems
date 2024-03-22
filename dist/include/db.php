<?php 

class Database{

private static $hostname = "localhost";
private static $username = "root";
private static $password = "";
private static $dbname = "ems";
private static $connection = null;

public static function connect(){
    if(!self::$connection)
    try {
        self::$connection = new PDO("mysql::host=".self::$hostname.";dbname=".self::$dbname.";",self::$username,self::$password);
        return self::$connection;
    } 
    catch(PDOException $e) {
        $e->getMessage();
    }
}

public static function disconnect(){
    self::$connection = null;
}

}

?>