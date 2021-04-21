<?php
include('../libs/contact.php');
$userid = $_COOKIE['userid'];
if(isset($_POST['savecontact']))
{
	unset($_POST['savecontact']);
	if(preg_match('/[^0-9 -]/',$_POST['mobile'])) $_POST['mobile'] = '';
	if(preg_match('/[^0-9 -]/',$_POST['phone'])) $_POST['phone'] = '';
	updateContact($_POST['oldid'],$_POST['mobile'],$_POST['phone'],$_POST['email'],$_POST['addressen'],$_POST['addressar']);
}
?>
