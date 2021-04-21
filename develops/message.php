<?php
if(isset($_POST['sendmessage']))
{
	unset($_POST['sendmessage']);
	if($_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != '')
	{
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			if(preg_match("/^[a-zA-Z ]*$/",$_POST['name']))
			{
				require_once('../PHPMailer/class.phpmailer.php');
				require_once('../PHPMailer/class.smtp.php');
				require_once('../PHPMailer/PHPMailerAutoload.php');
				$mail             = new PHPMailer(); // defaults to using php "mail()"
				$mail->IsSMTP(); // telling the class to use SMTP
				$mail->Host       = "smtp.secureserver.net";
				//  $mail->Host       = "localhost";
				//	$mail->Host       = "smtpout.secureserver.net";      // sets GMAIL as the SMTP server
				//	$mail->SMTPAuth   = true;                  // enable SMTP authentication
				//	$mail->SMTPSecure = 'ssl';
				//	$mail->Port = 465;
				//	$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
				$mail->Username   = "info@arise-mpe.com";  // GMAIL username
				$mail->Password   = "info2015";
				$mail->SetFrom('info@arise-mpe.com', 'INFO');
				//$mail->AddReplyTo("name@yourdomain.com","First Last");
				$address = "info@arise-mpe.com";
				$mail->AddAddress($address);
				$mail->Subject    = "Arise-MPE Form";
				//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
				$mail->Body    = '
					Name: '.$_POST['name'].'
					Email: '.$_POST['email'].'
					Comment: '.nl2br($_POST['message']);
				$mail->Send();
			}
		}
	}
}
header('location: ../');	
?>
