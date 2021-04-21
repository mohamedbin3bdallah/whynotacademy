<?php
if(isset($_POST['email']))
{
	if(empty($_POST['email'])) { setcookie('email', ''); echo 0; }
	//elseif(preg_match('/[^a-zA-Z ]/',$_POST['email'])) { setcookie('email', ''); echo 1; }
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { setcookie('email', ''); echo 2; }
	elseif(strlen($_POST['email']) > 250) { setcookie('email', ''); echo 3; }
	//elseif(exist('users','email',$_POST['email'])) { setcookie('email', ''); echo 4; }
	else  { setcookie('email', $_POST['email']); echo 5; }
	exit;
}
?>