<?php
include('../libs/bookingadmin.php');
$userid = $_COOKIE['userid'];

if(isset($_GET['page'])) $page = (int) $_GET['page'];
else $page = 0;
if ($page < 1) $page = 1;
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$noOfbooking = getnoOfBooking();
$totalPages = ceil($noOfbooking / $resultsPerPage);
?>