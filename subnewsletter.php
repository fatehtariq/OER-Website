<?php 
 include_once("db.php");
 if (isset($_GET['email'])) {
 	$sql = "insert into newsletter (Email) values ('{$_GET['email']}')";
 	$ret2 = sqlquery($sql);
 	#if ($ret2)
 	#	echo "done";
 }
 header("Location: mainWebPage.php");
?>