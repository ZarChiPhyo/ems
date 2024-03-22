<?php 

class Database{

    private static $username="root";
    private static $password="";
    private static $hostname="localhost";
    private static $dbname="ems";
    private static $connect=null;

    public static function connection(){
        if(!self::$connect){
           self::$connect = new PDO("mysql:host=".self::$hostname.";dbname=".self::$dbname.";",self::$username,self::$password);
           return self::$connect;
        }
    }

    public static function disconnection(){
        return self::$connect = null;
    }

}
?>