<?php
// include ('signup.php');
session_start();
include "db_conn.php";

//$uname = $name = $email =  "";
// $mesgErr = "";
$errors=[];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


    if(isset($_POST['signupbutton'])){
     $name=$_POST['name'];
	 $uname=$_POST['uname'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $cpassword=$_POST['re_password'];

	 if(isset($name) && !empty($name) && isset($uname) && !empty($uname)
	  && isset($email) && !empty($email) && isset($password) && !empty($password)&& isset($cpassword) && !empty($cpassword) ){
		if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
			
			
		    if (preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
			     
				 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				     
					if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
						
						if($password==$cpassword){
                           $password= password_hash($password,PASSWORD_BCRYPT);
						   $cpassword= password_hash($cpassword,PASSWORD_BCRYPT);
                           
						 
						   $rs=mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
						   if (mysqli_num_rows($rs)==0){
						   						  
							$insert="INSERT INTO user(user_name,password,name,email) VALUES ('$uname', '$password', '$name', '$email')";
						   						  
						   if (mysqli_query($conn, $insert)) {
							
							   $_SESSION['email']=$email;
							   $_SESSION['is_logged_in']=true;
							   setcookie("email",$_SESSION['email'],time()+120*60*24);
							   setcookie("is_logged_in",$_SESSION['is_logged_in'],time()+120*60*24);
							   header("Location: pagelogin.php");
						   }else{
							   $errors[]="Registration failed";
						   }
						}else{
							   $errors[]="Email is used";
						   }
						
						}else{
							$errors[]="Password and Confirm password must match";
						}


					}else{
						$errors[] =  "Password must be at least 8 characters in length and must 
						contain at least one number,one upper case letter, 
						one lower case letter and one special character.";
					}	

				}else{
					$emailErr['email'] = "Invalid email format";
				    }
				
			}else{
					$errors[]= " Only letters and white space allowed";
					}
		
	    }else{
					$errors[]= " Only letters and white space allowed";
					}
    }else{
		  $errors[]= "All fields are required";
	  }
	
	};
}

?>
	








<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" type="text/css" href="styleforma.css">
</head>

<body>
     <?php
     include('./views/header.php');
     ?>


     <form action="" method="post">
          <h2>SIGN UP</h2>
<?php
echo"<ul>";
if(count($errors)){
    foreach($errors as $error){
		echo "<li>$error</li>";
	}
	
}


echo"</ul><br>";
?>


          <label>Name</label>
          <input type="text" name="name" placeholder="Name">
          
          <br><br>

          <label>User Name</label>
          <input type="text" name="uname" placeholder="User Name">
          <br>


          <label>Email</label>
          <input type="email" name="email" placeholder="Email">
          <br><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password">
          <br><br>


          <label>Re Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>
          <br>





         
          <button name="signupbutton" type="submit" name="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>



</body>

<?php include('./views/footer.php');


?>

</html>
