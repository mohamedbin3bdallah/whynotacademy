<?php
if(isset($_POST['name']))
{
	if(empty($_POST['name'])) { setcookie('name', ''); echo 0; }
	elseif(preg_match('/[^a-zA-Z\p{Arabic}]+$/u',$_POST['name'])) { setcookie('name', ''); echo 1; }	
	elseif(strlen($_POST['name']) < 5) { setcookie('name', ''); echo 2; }
	elseif(strlen($_POST['name']) > 250) { setcookie('name', ''); echo 3; }
	//elseif(exist('booking','name',$_POST['name'])) { setcookie('name', ''); echo 4; }
	else  { setcookie('name', $_POST['name']); echo 5; }
	exit;
}
?>