<?php

include 'connect.php';
	$first_name=$last_name=$email=$pass="";
	$error="";
	if (isset($_POST['submit'])){
		$first_name=$_POST['fisrt_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		/*$s="DELETE FROM userregi";
		$result=mysqli_query($conn,$s);
		$s="DELETE FROM usertime";
		$result=mysqli_query($conn,$s);*/
		if (filter_var($email,FILTER_VALIDATE_EMAIL)==true) {
			$s="select * from userregi where email='$email'";
			$result=mysqli_query($conn,$s);
			$num=mysqli_num_rows($result);
			if($num==0)
			{
				$sql= "insert into userregi(first_name,last_name,email,password) values('$first_name','$last_name','$email','$pass')";
				mysqli_query($conn,$sql);
			
				header("location:login.php");

			}
			else
			{
				$error="Already use this email";
			}
		}
		else
		{
			$error="Invalid this email";
			
		}

	}
	
	
	
?>






<!DOCTYPE html>
<html>
<head>
	<title>Chatting App</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="box" action="" method="post">
		<h1 style="font-width: 200px;">Create a new account</h1>
		<input type="text" name="fisrt_name" placeholder="First Name" required>
		<input type="text" name="last_name" placeholder="Last Name" required>
		<input type="text" name="email" placeholder="Email address" required>
		<input type="password" name="password" placeholder="New Password" required>
		<input type="submit" name="submit" value="Sign Up" onClick="history.go(0)" >
		
		<div style="text-align: center; color: red;">
			<?php
			echo "$error ";
			
									
			?>
					
		</div>

	</form>
</body>
</html>