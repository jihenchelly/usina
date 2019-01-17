<?php
include ("php/crudDelivery.php");
$cc=new crudDelivery();
$idd=FILTER_INPUT(INPUT_GET,'id_delivery');
$cinD=FILTER_INPUT(INPUT_GET,'cinD');
	
	$cc->startDelivery($cinD,$idd,$cc->conn);

$ccc=new crudDelivery();
$emailD=$ccc->recupDelivery($idd,$ccc->conn);


foreach ($emailD as $e){
	$email=$e['email'];
}
require 'phpmailer/PHPMailerAutoload.php';




$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'projetweb523@gmail.com';                 // SMTP username
$mail->Password = 'projetweb.523';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

///////////////////////////////////////////////////////
//$cc=new crud();
//$list=$cc->clientEmail($cc->conn);
$mail->setFrom('projetweb523@gmail.com');//From : type in your e-mail


$mail->addAddress($email);//To : you can add multiple mails , just rewrite this line with diffrent email :D
/*
foreach ($list as $l){
	
 $mail->addAddress($l[0]);
}
*/
//$mail->addAddress('fakher.saafi@gmail.com');     // Add a recipient
//$mail->addAddress('fakher.saafi@esprit.tn');               // Name is optional


$mail->Subject = 'usina';
$mail->Body    = "delivery N ".$idd." is in progress";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {

   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  
}
echo "finish";
?>