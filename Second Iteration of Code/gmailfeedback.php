<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<?php
include 'mail/class.phpmailer.php';
    include 'mail/class.pop3.php';
    include 'mail/class.smtp.php';
    require("mail/PHPMailerAutoload.php");
$mail = new PHPMailer;
if(isset($_POST['name'])||isset($_POST['email'])||isset($_POST['type'])||isset($_POST['rowa'])||isset($_POST['rowb'])||isset($_POST['rowc'])||isset($_POST['groupa'])||isset($_POST['groupb'])||isset($_POST['texta'])||isset($_POST['textb'])||isset($_POST['cb'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$rowa=$_POST['rowa'];
	$rowb=$_POST['rowb'];
	$rowc=$_POST['rowc'];
	$groupa=$_POST['groupa'];
	$groupb=$_POST['groupb'];
	$texta=$_POST['texta'];
	$textb=$_POST['textb'];
	$cb=$_POST['cb'];
	

			//$mail->SMTPDebug = 1;                               // Enable verbose debug output

			// Set mailer to use SMTP
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'contactus@fluxus.in';                 // SMTP username
			$mail->Password = 'Fluxus2015';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                 // TCP port to connect to


			$mail->From = 'contactus@fluxus.in';
			$mail->FromName = 'Feedback';
			$mail->addAddress('cse130001023@iiti.ac.in'); 
		

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Feedback from '.$name;
			$msg='<b>Name</b>:'.$name."<br><b>Email</b>:".$email."<br><b>Designation</b>:".$type."<br><b>Security Personnel</b>:".$rowa."<br><b>Security Official Interaction</b>".$rowb."<br><b>Security Arrangements</b>:".$rowc."<br><b>How useful did you find the content of this web portal?</b>:".$groupa."<br><b>How responsive and interactive did you find this website?</b>:".$groupb."<br><b>Comments regarding the security system of IIT Indore:</b>:".$texta."<br><b>Comments/suggestions for the website</b>:".$textb."<br><b>I would like to be contacted by officials</b>:".$cb;
			$mail->Body    = $msg;

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}
}
?>