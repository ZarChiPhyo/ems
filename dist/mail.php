<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include_once './vendors/vendor/phpmailer/src/PHPMailer.php';
include_once './vendors/vendor/phpmailer/src/SMTP.php';
include_once './vendors/vendor/phpmailer/src/Exception.php';

try{

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smpt.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Port = 587;
    $mail->Username = 'zarchiphyoe11@gmail.com';
    $mail->Password = 'eviv yzfr wjtb zjas';


    $mail->setFrom('zarchiphoye11@gmail.com','Zar Chi');
    $mail->addAddress('kyawthmuekhincu@gmail.com','Kyawt Hmue');
    $mail->addReplyTo('zarchiphyoe11@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Mail Sending';
    $mail->Body = "Hello, Kyawt Hmue. Here I am";

    $mail->send();
    echo "success";

}
catch(Exception $e){
    $e->getMessage();
}

?>