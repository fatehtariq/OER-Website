<?php 
 include_once("db.php");
 if (isset($_POST['email']) && isset($_POST['first']) && isset($_POST['last']) && isset($_POST['message'])) {
 	$sql = "insert into contactus (`FirstName`, `LastName`, `Email`, `Message`) values ('{$_POST['first']}', '{$_POST['last']}', '{$_POST['email']}', '{$_POST['message']}')";
 	$ret2 = sqlquery($sql);
 	#if ($ret2)
 	#	echo "done";
 }
 header("Location: mainWebPage.php");
?>