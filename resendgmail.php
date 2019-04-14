<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\wamp64\www\voting\PHPMailer-master\src\PHPMailer.php';
require 'C:\wamp64\www\voting\PHPMailer-master\src\SMTP.php';
require 'C:\wamp64\www\voting\PHPMailer-master\src\POP3.php';
require 'C:\wamp64\www\voting\PHPMailer-master\src\Exception.php';
$mail = new PHPMailer(true);
	session_start();
	$email_id=$_SESSION['email'];
	$user=$_SESSION['username'];
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.'.substr(strstr($email_id ,'@'), 1);;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'onstreamballot@gmail.com';                 // SMTP username
    $mail->Password = 'oballot333';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';
	
	$otp=rand(1000,9999);
	$_SESSION['otps']=$otp;
	
    $mail->setFrom('onstreamballot@gmail.com', 'On Stream Ballot');
    $mail->addAddress($email_id, $user);
	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to On stream Ballot';
    $mail->Body    = "hii $user.</br>your otp is $otp submit it for verification <br><br>thank you...!!!";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
	if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
		echo "<script type='text/javascript'>alert('invalid mail id please check');</script>";
		header("Refresh:4; location:gmailverify.php",true, 700);
    }else{
        echo "Message has been sent";
		echo "<script type='text/javascript'>alert('check your mail');</script>";
		header("location:otp.php");
	}

?>