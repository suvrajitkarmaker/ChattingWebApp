<?php
	session_start();
	include 'connect.php';
	$sql = "select * FROM userregi where email!='".$_SESSION["email"]."'";

	$result = mysqli_query($conn,$sql);
	$tmp='
	<table class="table table-bordered" >
	  <tr>
	    <th>Name</td>
	    <th>Status</td>
	    <th>Action</td>
	  </tr>
	';
	while ($row = mysqli_fetch_assoc($result)) {

		$status="";
		//$current_timestamp = strtotime(date("Y-m-d H:i:s"));
 //$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);

		$ussql = "select last_time FROM usertime where email='".$row["email"]."'";
		$usresult = mysqli_query($conn,$ussql);
		$usrow = mysqli_fetch_assoc($usresult);
		$usertime=$usrow["last_time"];


		$diff = abs(strtotime($usertime)-strtotime(date("Y-m-d H:i:s")));

		if($diff<=10)
		{
			$status='<span style="color:green;font-weight:bold">Online</span>';
		}
		else
		{
			$status='<span style="color:red;font-weight:bold">Offline</span>';
		}

		$tmp.='
			<tr>
			    <td>'.$row["first_name"]." ".$row["last_name"].'</td>
			    <td>'.$status.'</td>
			    <td><button>Start Chat</button></td>
			</tr>
		';

	}
	$tmp.='</table';
	echo $tmp;
?>