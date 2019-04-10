<?php

	session_start();
	include 'connect.php';
	
	$email=$password="";
	$error="";
	if (isset($_POST['submit'])){

		$email = $_POST['email']; 
	    $password = $_POST['password']; 
	    $sql = "select * FROM userregi where email='$email'";
        $result = mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num==0){
        	$error="Worng email address";
        }
        else{

        	$row = mysqli_fetch_assoc($result);
        	if ($row["password"]==$password){
        	
        		$_SESSION["email"] = $email;

				$_SESSION["username"]=$row["first_name"]." ".$row["last_name"];
				$sql1 = "DELETE FROM usertime WHERE email='$email'";
				mysqli_query($conn,$sql1);
				$current_timestamp = strtotime(date("Y-m-d H:i:s") );
 				$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);

				$sql2= "insert into usertime(email,last_time) values('$email','$current_timestamp')";
				mysqli_query($conn,$sql2);

				


        		header("location:chattingapp.php");
        	}
        	else{
        		$error="Worng password";
        	}
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
		<h1 >Login</h1>
		<input type="email" name="email" placeholder="Email address" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" name="submit" value="Login">
		<div>
		<span><a href="createAcount.php" style="color: white">Create an account</a></span>
		</div> 
		<div style="text-align: center; color: red;">
			<?php
			echo "$error ";					
			?>		
		</div> 
	</form>
	
</body>
</html>