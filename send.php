<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'phpmail/src/Exception.php';
require 'phpmail/src/PHPMailer.php';
require 'phpmail/src/SMTP.php';
if (isset($_POST["submit"])) {
    
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "pragatheeswaran2906@gmail.com";
    $mail->Password = "ffiwfpimvtogoofx";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->setFrom("pragatheeswaran2906@gmail.com");
    
    $mail->addAddress($_POST["umail"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["uname"];
    $mail->Body=$_POST["msg"];
    $mail->send();
    
    echo "mail send successfully";
}
?>