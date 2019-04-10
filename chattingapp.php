<?php
	session_start();
	include 'connect.php';
	
	
	if (!isset($_SESSION['email'])) {
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chatting App</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<p align="right"> <?php echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
	<h1 align="center">Chatting App</h1>
	<div>
		<h4 style="padding-top: 10px; padding-bottom: 10px" align="center">User list</h4>
		
	</div>
	<div class="container" id="user_details">
		
	</div>

	 	<div id="user_dialog_" class="user_dialog" title="You have chat with">
			 <div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history">
			 </div>
	  		<div class="form-group">
	  		<textarea name="chat_message_" id="chat_message_" class="form-control"></textarea>
	  		</div>
	  		<div class="form-group" align="right">
	  			<button type="button" name="send_chat" id="" class="btn btn-info send_chat">Send</button>
			</div>
		</div>;

</body>
</html>
<script>
	$(document).ready(function(){
		fetch_user();

		setInterval(function(){
			update_last_activity();
			fetch_user();
		},5000);


		function fetch_user()
		{
			$.ajax({
				url:"fetch_user.php",
				method:"POST",
				success:function(data){
					$('#user_details').html(data);
				}
			})
		}
		function update_last_activity()
		{
			$.ajax({
				url:"update_last_activity.php",
				method:"POST",
				success:function()
				{

				}
			})
		}

	});
</script>