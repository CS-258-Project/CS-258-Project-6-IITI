<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<?php
	include 'mail/class.phpmailer.php';
    include 'mail/class.pop3.php';
    include 'mail/class.smtp.php';
    require("mail/PHPMailerAutoload.php");
$mail = new PHPMailer;

if(isset($_POST['names'])||isset($_POST['email'])||isset($_POST['types'])||isset($_POST['group1'])||isset($_POST['details'])||isset($_POST['cb'])){
	$name=$_POST['names'];
	$email=$_POST['email'];
	$post=$_POST['types'];
	$regarding=$_POST['group1'];
	$complaint=$_POST['details'];
	$cb=$_POST['cb'];
	
	//$image=$_POST['image'];

			//$mail->SMTPDebug = 1; 

			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'contactus@fluxus.in';                 // SMTP username
			$mail->Password = 'Fluxus2015';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                 // TCP port to connect to


			$mail->From = 'contactus@fluxus.in';
			$mail->FromName = 'Complaint';
			$mail->addAddress('cse130001023@iiti.ac.in'); 
	

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Complaint from '.$name;
			$msg='<b>Name</b>:'.$name."<br><b>Email Number</b>:".$email."<br><b>Designation</b>:".$post."<br><b>Complaint regarding</b>:".$regarding."<br><b>Complaint</b>:".$complaint."<br><b>Contact Status</b>:".$cb;
			$mail->Body    = $msg;

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}
}

?>