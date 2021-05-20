<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleforma.css">
</head>

<body>


	$uname = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function validate($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		

		if (empty($_POST['uname'])) {
			$unameErr['uname'] =  "Username is required!";
		} else {
			$uname = validate($_POST['uname']);

			if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
				$unameErr['uname'] = " Only letters and white space allowed";
			}
		}



		if (empty($_POST['password'])) {
			$passwordErr['password'] = "Password is required!";
		} else {
			// hashing the password
			// $pass = md5($pass);

			$password = validate($_POST['password']);

			// forma te validimit per pasword 
			if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
				$passwordErr['password'] = "Password must be at least 8 characters in length and must contain at least one number,
		 one upper case letter, one lower case letter and one special character.";
			}
		}


		include('indexform.php');


		$sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: indexform.php");
				
				exit();  
            }else{
				echo "incorrect";
				//header("Location: index.php?error=Incorect User name or password");
				exit();
			}
		}else{
			echo "incorrect";
			//header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	} else {
		header("Location: indexform.php");
		exit();
	}

?>
</body>
</html>