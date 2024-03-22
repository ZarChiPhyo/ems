
<?php 
$age = 101;
try{
    if($age>100)
    {
        throw new Exception("Age is beyond limit");
    }
    if(empty($username))
    {
        throw new Expection("Empty Username");
    }   
}
catch(Exception $e)
{
    echo $e->getMessage();
}
finally 
{
    echo "Finish";
}
?>
