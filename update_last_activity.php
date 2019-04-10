<?php
	session_start();
	include 'connect.php';
	$current_timestamp = strtotime(date("Y-m-d H:i:s"));
 	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);

	$sql = "UPDATE usertime SET last_time = '".$current_timestamp."' where email='".$_SESSION["email"]."'";
	mysqli_query($conn,$sql);

?>