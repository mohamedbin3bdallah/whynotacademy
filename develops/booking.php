<?php
include('libs/frontendlang.php');
include('libs/booking.php');

$contact = getContact($lang_file);

if(isset($_POST['registersubmit']))
{
	if(isset($_GET['id'],$_GET['coursetype']) && $_GET['id'] != '')
	{
	if(isset($_COOKIE['name'],$_COOKIE['email'],$_COOKIE['mobile']))
	{
	unset($_POST);
	$booking['name'] = $_COOKIE['name'];
	$booking['email'] = $_COOKIE['email'];
	$booking['mobile'] = $_COOKIE['mobile'];
	$booking['courseid'] = $_GET['id'];
	$booking['coursetype'] = $_GET['coursetype'];
	booking($booking);

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
	$mail->Username   = "info@whynotacademy.com";  // GMAIL username
	$mail->Password   = "info2015";
	$mail->SetFrom('info@whynotacademy.com', 'INFO');
	//$mail->AddReplyTo("name@yourdomain.com","First Last");
	$address = "info@whynotacademy.com";
	$mail->AddAddress($address);
	$mail->Subject    = "Booking Message";
	//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
	$mail->Body    = 'Name: '.$_COOKIE['name'].' Email: '.$_COOKIE['email'].' Mobile: '.$_COOKIE['mobile'].' Courss: '.getCourseInfo($booking['coursetype'],'id',$booking['courseid'],$lang_file);
	$mail->Send();*/
	
	unset($_COOKIE,$booking);
	}
	}
	header('Location: /whynotacademy');
}
?>