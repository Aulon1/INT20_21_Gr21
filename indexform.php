<?php
// include ('signup.php');
session_start();
include "db_conn.php";

//$email = $name = $email =  "";
// $mesgErr = "";
$errors=[];

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

//	function test_input($data)
//	{
//		$data = trim($data);
//		$data = stripslashes($data);
//		$data = htmlspecialchars($data);
//		return $data;
//	}


    if(isset($_POST['loginbutton'])){
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 

	 if( !empty($email) && isset($email) && isset($password) && !empty($password)){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$sqlquery="Select * from user where email='$email'";
			if($result=mysqli_query($conn, $sqlquery)){
				if($result->num_rows>0){
                  $row= $result->fetch_assoc();


            if(password_verify($password,$row['password'])){
				$_SESSION['email']=$email;
				$_SESSION['is_logged_in']=true;
				setcookie("email",$_SESSION['email'],time()+120*60*24);
				setcookie("is_logged_in",$_SESSION['is_logged_in'],time()+120*60*24);
				header("Location: pagelogin.php");
			}else{
				$errors[]="Password is incorrect";
			}
		 }else{
			$errors[]="User does not exist";
		 }
		 } else{
				$errors[]="Login failed";
			}
			
	    }else{
			$errors[]= " Email is not in the right format";
			}
    }else{
		  $errors[]= "All fields are required";
	  }
	
	};

?>

<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styleforma.css">

<style>

.error{color: #FF0000;}

</style>
</head>

<body>

	
	<?php
	include('./views/header.php');
	?>

	<form action="" method="post">
		<h2>LOGIN</h2>
<?php
echo"<ul>";
if(count($errors)){
    foreach($errors as $error){
		echo "<li>$error</li>";
	}
	
}


echo"</ul><br>";
?>


		<label>Email</label>
		<input type="text" name="email" placeholder="Email"><br>

	<br>



		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

	<br>


		<button name="loginbutton" type="submit">Login</button>

		<a href="signup-check.php" class="ca">Create an acount</a>

		<!-- <a href="signup.php">Create an account</a> -->
	</form>
	
</body>
 <?php include('./views/footer.php'); 


 ?> 
</html>
