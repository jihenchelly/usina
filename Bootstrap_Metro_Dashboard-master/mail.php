<?php
require 'phpmailer/PHPMailerAutoload.php';

$q=$_GET['q'];
$mail = new PHPMailer;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);



$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jerbi.haythem@gmail.com';                 // SMTP username
$mail->Password = 'hj9595hj9595';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

///////////////////////////////////////////////////////
//$cc=new crud();
//$list=$cc->clientEmail($cc->conn);
$mail->setFrom('jerbi.haythem@gmail.com');//From : type in your e-mail


$mail->addAddress('jerbi.haythem@gmail.com');//To : you can add multiple mails , just rewrite this line with diffrent email :D
/*
foreach ($list as $l){
	
 $mail->addAddress($l[0]);
}
*/
//$mail->addAddress('fakher.saafi@gmail.com');     // Add a recipient
//$mail->addAddress('fakher.saafi@esprit.tn');               // Name is optional

$q=round((100000000-$q)/10000);
$mail->Subject = 'Stock managment';
$mail->Body    = "Votre stock a dépassé les 90% d'espace occupé et il vous reste exactement ".$q." m² d'espace libre";
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>