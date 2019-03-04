<?php

require_once('PHPMailer/PHPMailerAutoload.php');

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
$mail->Username = "insta.dev.omk@gmail.com";
$mail->Password = "insta@omk";
$mail->SetFrom("harry.otari@gmail.com");
$mail->Subject = "Welcome to SSSCOPS alumni portal!!!";
$mail->Body = '<p>Dear  <h3 style="color: #6080c5;">'.$firstName.' '.$surName.'</h3> </p><br/>
<p style="color: ;"> Thank you for registering to SSSCOPS alumni poratl.<br/></p>
<p style="color: ;"> College will contact you for further register processing. </p>';
// $mail->AddAddress('harry.otari@gmail.com');
$mail->addAddress($email, $fullname);

 if(!$mail->Send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
	return 0;
 } else {
	 return 1;
    // echo "Message has been sent";
 }
}


function storeData($firstName,$surName,$email,$batchyear,$address,$maritalstatus,$profession,$afterdiploma)
  {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alumni";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
		$chechRecord = "select * from ssscops where email ='".$email."'";
		
		$result = $conn->query($chechRecord);
		GLOBAL $return;
		// print_r($result);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			// print_r($row);
			echo '<script> alert("Thank You for registering to SSSCOPS alumni,but provided details already exists, please provide new details to register. ") ; window.location = "http://ssscops.in/newDesign/alumni.php";</script>';
		}
		else{
				$sql = "INSERT INTO ssscops ( firstname, surname, email, batchyear, address, maritalstatus, profession, afterdiploma) VALUES ('".$firstName."', '".$surName."', '".$email."', '".$batchyear."', '".$address."', '".$maritalstatus."', '".$profession."', '".$afterdiploma."')";
		
			if ($conn->query($sql) === TRUE) {
				echo '<script> alert("Thank You for registering to SSSCOPS alumni ,College will contact you for further alumni register process. ") ; window.location = "http://ssscops.in/newDesign/";</script>';
				// echo "New record created successfully";
				// $return = 0;
				$aa = SentMail($email,$firstName,$surName);
			} else {
				echo '<script> alert("Thank You for registering to SSSCOPS alumnis,but system is facing issues, Please try after sometimes. ") ; window.location = "http://ssscops.in/newDesign/";</script>';
				// echo "Error: " . $sql . "<br>" . $conn->error;
				// $return = 1;	
			}
		}
		$conn->close();
	}
if(isset($_POST['submitButton'])){ 
  $firstName = $_POST['name']; 
  $surName = $_POST['surname'];
  $email = $_POST['email'];
  $batchyear = $_POST['batchyear'];
  $address = $_POST['address'];
  $maritalstatus = $_POST['maritalstatus'];
  $profession = $_POST['profession'];
  $afterdiploma = $_POST['afterdiploma'];
  
  //CREATE TABLE `alumni`.`ssscops` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `firstname` VARCHAR(50) NULL , `surname` VARCHAR(50) NULL , `email` VARCHAR(30) NULL , `batchyear` INT NULL , `address` VARCHAR(100) NULL , `maritalstatus` VARCHAR(10) NULL , `profession` VARCHAR(30) NULL , `afterdiploma` VARCHAR(30) NULL ) ENGINE = InnoDB;
	$callFunction = storeData($firstName,$surName,$email,$batchyear,$address,$maritalstatus,$profession,$afterdiploma);
	
 }
 
 ?>