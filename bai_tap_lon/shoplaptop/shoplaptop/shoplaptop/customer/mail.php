
<?php	
header('Content-type: text/html; charset=utf-8');
include   "PHPMailer/src/PHPMailer.php";
include   "PHPMailer/src/Exception.php";
include   "PHPMailer/src/OAuth.php";
include   "PHPMailer/src/POP3.php";
include   "PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);         
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dangminhquang1401@gmail.com';                 // SMTP username
    $mail->Password = 'nqaufcubqvpvmpnx';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('dangminhquang1401@gmail.com', 'Mailer');
    $mail->addAddress($fullname, 'Joe User');     //gui cho thang moi tao
 
    //Attachments
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MA XAC THUC OTP';
    $mail->Body    = $otp;
 
    $mail->send();
    echo ("Mời bạn check mail và nhập OTP");
            ?>

            <a href="otp.php" style="color: red" >Nhập OTP</a> <?php
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>