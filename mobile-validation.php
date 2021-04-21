<?php
if(isset($_POST['mobile']))
{
	if(empty($_POST['mobile'])) { setcookie('mobile', ''); echo 0; }
	elseif(preg_match('/[^0-9]/',$_POST['mobile'])) { setcookie('mobile', ''); echo 1; }	
	elseif(strlen($_POST['mobile']) < 11) { setcookie('mobile', ''); echo 2; }
	elseif(strlen($_POST['mobile']) > 11) { setcookie('mobile', ''); echo 3; }
	//elseif(exist('booking','mobile',$_POST['mobile'])) { setcookie('mobile', ''); echo 4; }
	else  { setcookie('mobile', $_POST['mobile']); echo 5; }
	exit;
}
?>