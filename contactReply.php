<?php

require_once('PHPMailer/PHPMailerAutoload.php');

if(isset($_POST['submitButton'])){ //check if form was submitted
  $firstName = $_POST['name']; //get input text
  $surName = $_POST['surname'];
  $email = $_POST['email'];
  $enquiry = $_POST['need'];
  $message = $_POST['message'];

function SentMail($email,$firstName,$surName,$enquiry,$message)
{
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
// $mail->Host = "smtp.mail.yahoo.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ssscopss@gmail.com";
$mail->Password = "sahyadri@123";
$mail->SetFrom("pharmacycollegesawarde@yahoo.in");
$mail->Subject = $enquiry;
$mail->Body = 'Dear SSSCOPS<br/> '.$firstName.' '.$surName.' with email id '.$email.' has sent enquiry message as - <br/>'.$message;
$mail->AddAddress('pharmacycollegesawarde@yahoo.in');

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
	return 0;
 } else {
	 return 1;
    // echo "Message has been sent";
 }
}

if(SentMail($email,$firstName,$surName,$enquiry,$message))
	
	{
			echo '<script> alert("Thank You for enquiry. Our staff will contact you soon.") ; window.location = "http://ssscops.in/";</script>';
	}
	else{
		echo '<script> alert("Thank You for enquiry. Something went wrong, please add another enquiry.") ; window.location = "http://ssscops.in/contact.php";</script>';
	}


}
?>
