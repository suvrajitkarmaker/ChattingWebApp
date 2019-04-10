<?php 
	include 'config.php';
	$conn = mysqli_connect($server, $username, $password,$db_name);
	if(!$conn){
		echo "Connection Error";
	}
?>