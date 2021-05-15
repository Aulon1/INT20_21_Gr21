<?php
// include ('signup.php');
session_start();
include "db_conn.php";

$uname = $name = "";
// $mesgErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}



	if (empty($_POST['name'])) {
		$nameErr['name'] = "Name is required!";
	} else {
		$name = test_input($_POST['name']);

		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
			$nameErr['name'] = " Only letters and white space allowed";
		}
	}

	if (empty($_POST['uname'])) {
		$unameErr['uname'] = "Username is required!";
	} else {
		$uname = test_input($_POST['uname']);

		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
			$unameErr['uname'] = " Only letters and white space allowed";
		}
	}



	include "signup.php";

	$sql = "SELECT * FROM user WHERE user_name= '$uname' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// header("Location: signup.php?error=The username is taken try another&$user_data");

		//ketu duhet me shtu diqka 
		$mesgErr['msg'] = "E ka dikush!";
	


		exit();
	} else {
		$sql2 = "INSERT INTO user(user_name, name) VALUES('$uname', '$name')";
		$result2 = mysqli_query($conn, $sql2);

		if ($result2) {
			// header("Location: signup.php?success=Your account has been created successfully");

			echo "Your account has been created successfully!";
			exit();
		}
		//else {
		// 	// header("Location: signup.php?error=Unknown error occurred&$user_data");
		// 	echo "Unknown error occurred!";
		// 	exit();
		// }
	}
}
