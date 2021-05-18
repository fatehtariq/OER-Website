<?php 
session_start();
 include_once("db.php");
 if (isset($_POST['remail']) && isset($_POST['first']) && isset($_POST['last'])) {
 	#print_r($_POST);
 	#die();
 	$sql = "insert into registration (`First name`, `Last name`, `Email`) values ('{$_POST['first']}', '{$_POST['last']}', '{$_POST['remail']}')";
 	$ret2 = sqlquery($sql);
 	#if ($ret2)
 	#	echo "done";
 	$_SESSION['registeration_success'] = "You have been registered.";
 }
 header("Location: mainWebPage.php");
?>