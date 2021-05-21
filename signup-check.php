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
	







<!-- //	if (empty($_POST['name'])) {
//		$nameErr['name'] = "Name is required!";
//	} else {
//		$name = test_input($_POST['name']);
//
		// check if name only contains letters and whitespace
//		if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
//			$nameErr['name'] = " Only letters and white space allowed";
//		}
//	}
//
//	if (empty($_POST['uname'])) {
//		$unameErr['uname'] = "Username is required!";
//	} else {
//		$uname = test_input($_POST['uname']);
//
		// check if name only contains letters and whitespace
//		if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
//			$unameErr['uname'] = " Only letters and white space allowed";
//		}
//	}

//	if (empty($_POST["email"])) {
//		$emailErr['email'] = "Email is required";
//	} else {
//		$email = test_input($_POST["email"]);
//		// check if e-mail address is well-formed
//		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//			$emailErr['email'] = "Invalid email format";
//		}
//	}


	// forma te validimit per pasword 
//	if (empty($_POST['password'])) {
//		$passwordErr['password'] = "Password is required";
//	} else {
//		$password = test_input($_POST['password']);
//
//		if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
//			$passwordErr['password'] =  "Password must be at least 8 characters in length and must 
//			contain at least one number,
//		 one upper case letter, one lower case letter and one special character.";
//		}
//		// else {
		// // 	echo "Your password is strong.";
//	}


		//Hash and salt password
		// $hash_format = "$2y$10$";
		// $salt = "iusesomecrazystrings22";
        // $hash_and_salt = $hash_format . $salt;
        // $password =  crypt($password, $hash_and_salt);






		// forma te validimit per pasword 
		//    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
		//     $password = test_input($_POST["password"]);
		//     $cpassword = test_input($_POST["cpassword"]);
		//     if (strlen($_POST["password"]) <= '8') {
		//         $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		//     }
		//     elseif(!preg_match("#[0-9]+#",$password)) {
		//         $passwordErr = "Your Password Must Contain At Least 1 Number!";
		//     }
		//     elseif(!preg_match("#[A-Z]+#",$password)) {
		//         $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		//     }
		//     elseif(!preg_match("#[a-z]+#",$password)) {
		//         $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		//     } else {
		//         $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
		//     }
		// }


		// forma te validimit per pasword 
		// if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
		// 	$password = test_input($_POST["password"]);
		// 	$cpassword = test_input($_POST["cpassword"]);
		// 	if (strlen($_POST["password"]) <= 8) {
		// 		$passwordErr = "Your Password Must Contain At Least 8 Characters!";
		// 	}
		// 	elseif(!preg_match("#[0-9]+#",$password)) {
		// 		$passwordErr = "Your Password Must Contain At Least 1 Number!";
		// 	}
		// 	elseif(!preg_match("#[A-Z]+#",$password)) {
		// 		$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		// 	}
		// 	elseif(!preg_match("#[a-z]+#",$password)) {
		// 		$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		// 	} else {
		// 		$cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
		// 	}
		// }

	

//	include "signup.php";

//	$sql = "SELECT * FROM user WHERE user_name= '$uname' ";
//	$result = mysqli_query($conn, $sql);
//
//	if (mysqli_num_rows($result) > 0) {
		// header("Location: signup.php?error=The username is taken try another&$user_data");

			//ketu duhet me shtu diqka 
			// $mesgErr['msg'] = "E ka dikush!";

//		echo "E ka dikush!";



//		exit();
//	} else {
//		$sql2 = "INSERT INTO user(user_name, password, name, email) VALUES('$uname','$password', '$name', '$email')";
//		$result2 = mysqli_query($conn, $sql2);
//
//		if ($result2) {
			// header("Location: signup.php?success=Your account has been created successfully");

//			echo "Your account has been created successfully!";
//			exit();
//		} else {
//			// header("Location: signup.php?error=Unknown error occurred&$user_data");
//			echo "Unknown error occurred!";
//			exit();
//		}
//	 }
// } -->

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
