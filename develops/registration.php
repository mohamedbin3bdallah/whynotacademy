<?php
include('libs/lang.php');
include('libs/register.php');
if(isset($_POST['registersubmit']))
{
	unset($_POST['registersubmit'],$_POST['cmfpassword'],$_POST['username-hidden'],$_POST['email-hidden'],$_POST['password-hidden'],$_POST['cmfpassword-hidden']);
	//print_r($_POST);
	$_POST['password'] = hash('sha256', $_POST['password'], FALSE);
	$_POST['code'] = uniqid(mt_rand(111111111,999999999));
	register($_POST);
		
	/*require_once('../PHPMailer/class.phpmailer.php');
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
	$mail->Subject    = "Why Not Academy Account Activation";
	//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
	$mail->Body    = 'You can active your account on : http://www.whynotacademy.net/active.php?code='.$_POST['code'];
	$mail->Send();*/
	unset($_POST);
	header('Location: index.php');
}
?>