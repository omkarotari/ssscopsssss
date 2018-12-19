<?php
if(isset($_POST['submitButton'])){ //check if form was submitted
  $firstName = $_POST['name']; //get input text
  $surName = $_POST['surname'];
  $email = $_POST['email'];
  $enquiry = $_POST['need'];
  $message = $_POST['message'];
}
require_once('PHPMailer/PHPMailerAutoload.php');

SentMail('harry.otari@gmail.com','Omkar');
function SentMail($email, $fullname)
{
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug  = 2;
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
$mail->SMTPAuth = true;
$mail->Username = 'AKIAIRUAESKFNRPAWLBA';
$mail->Password = 'Ao8kuL59wjXdqBwQ2DxUMYRPuoNbt5CHNBbATsV3qbbA';
$mail->SMTPSecure = 'tsl';
$mail-> Port = 587;
$mail->From = 'insta.dev.omk@gmail.com';
$mail->FromName = 'test';
$mail->addAddress($email, $fullname);
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'GDOT : Custom report CSV ';
$mail->Body    = 'Hi <br/>Here is the report attached';
 
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  // return 0; 
  }
 else
  {
	echo 'Message sent.';  
 //return 1;	
  }
}
?>
