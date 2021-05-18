<?php  
function sqlquery($sql){
	$con = new mysqli("localhost", "root", "", "oermain");
	if($con->connect_error)
	{
		die("No connection made");
	}
	
	$test1 = $con->query($sql);
	$con->close();
	return $test1;
}
?>