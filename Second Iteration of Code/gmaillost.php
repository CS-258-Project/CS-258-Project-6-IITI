<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<?php
include 'mail/class.phpmailer.php';
    include 'mail/class.pop3.php';
    include 'mail/class.smtp.php';
    require("mail/PHPMailerAutoload.php");
$mail = new PHPMailer;
if(isset($_POST['name'])||isset($_POST['number'])||isset($_POST['course'])||isset($_POST['details'])||isset($_POST['image'])){
	$name=$_POST['name'];
	$contact=$_POST['number'];
	$course=$_POST['course'];
	$details=$_POST['details'];
	//$image=$_POST['image'];

	if (array_key_exists('image', $_FILES)) {
		$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['image']['name'])); //uploading image

		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
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
			$mail->FromName = 'Lost and Found';
			$mail->addAddress('cse130001023@iiti.ac.in'); 
			  // Add a recipient
			/*$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');

			$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
			$attach='Imageby'.$name;
			$mail->addAttachment($uploadfile, $attach);

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Lost complaint from '.$name;
			$msg='<b>Name</b>:'.$name."<br><b>Contact Number</b>:".$contact."<br><b>Course</b>:".$course."<br><b>Details</b>:".$details;
			$mail->Body    = $msg;

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo 'Message has been sent';
			}
		}else{
			echo 'No attachment';
		}
	}else{
		echo 'Failed';
	}
}
?>