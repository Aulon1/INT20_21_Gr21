<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="styleforma.css">

<style>

.error{color: #FF0000;}

</style>
</head>

<body>

	
	<?php
	include('./views/header.php');
	?>

	<form action="login.php" method="post">
		<h2>LOGIN</h2>

		<label>User Name</label>
		<input type="text" name="uname"  placeholder="User Name">
		<span class="error">
		<?php

		
		if (isset($unameErr['uname'])) {
			echo $unameErr['uname'];
		}

		?>
		</span>
		<br><br>



		<label>Password</label>
		<input type="password" name="password" placeholder="Password">
		<label><span class="error">
		<?php
		if (isset($passwordErr['password'])) {
			echo $passwordErr['password'];
		}
		?>
		</span></label>
		
		<br><br>


		<button type="submit">Login</button>

		<a href="signup.php" class="ca">Create an acount</a>

		<!-- <a href="signup.php">Create an account</a> -->
	</form>
	
</body>
 <?php include('./views/footer.php'); 


 ?> 
</html>
