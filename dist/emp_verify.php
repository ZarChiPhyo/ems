<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once './vendors/vendor/phpmailer/src/PHPMailer.php';
include_once './vendors/vendor/phpmailer/src/SMTP.php';
include_once './vendors/vendor/phpmailer/src/Exception.php';
include_once './controller/employeeController.php';

$id = $_POST['id'];
$_SESSION['id'] = $id;

//$id = 101;

$emp_controller = new EmployeeController();
$result = $emp_controller->getEmpId($_SESSION['id']);
//var_dump($result);

try{
    //Sever Setting
$mail = new PHPMailer(true);
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;


$mail->Username = 'zarchiphyoe11@gmail.com';
$mail->Password = 'eviv yzfr wjtb zjas';

$mail->setFrom('zarchiphyoe11@gmail.com','HMI');
$mail->addAddress($result['email'],$result['first_name']);
$mail->addReplyTo('zarchiphyoe11@gmail.com','Sender Name');

$mail->IsHTML(true);
$mail->Subject = "Verfication for EMP management system";
$mail->Body = "Dear Steven , Hello.<b>Gamil</b>SMPT  mail body";

$mail->send();
echo "success";
}
catch(Exception $e){
    $e->getMessage();
}

?>