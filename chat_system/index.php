<!DOCTYPE html>
<html>
<head>
	<title>PHP Simple Chat System using AJAX</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
		background-color: #f0f8ff; /* Light blue background */
	}
	#login_form {
		width: 350px;
		height: 350px;
		position: relative;
		top: 50px;
		margin: auto;
		padding: 20px;
		background-color: white; /* White background for the form */
		border-radius: 10px; /* Rounded corners */
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
	}
	h2 {
		color: #007bff; /* Blue heading */
	}
	.btn-primary {
		background-color: #007bff; /* Blue button */
		border-color: #007bff;
	}
	a {
		color: #007bff; /* Blue link */
	}
	a:hover {
		color: #0056b3; /* Darker blue on hover */
	}
</style>
</head>
<body>
<div class="container">
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
		<hr>
		<form method="POST" action="login.php">
			Username: <input type="text" name="username" class="form-control" required>
			<div style="height: 10px;"></div>		
			Password: <input type="password" name="password" class="form-control" required> 
			<div style="height: 10px;"></div>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="signup.php"> Sign up</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>
