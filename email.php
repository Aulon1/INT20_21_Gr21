<?php 


		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];

		$email_from = 'drilon.maliqi@student.uni-pr.edu';

		$email_subject = 'New Form Query!';

		$email_body = "Visitor Name : $name.\n<br>".
						"Visitor Email : $visitor_email.\n<br>".
							"Visitor Message : $message.\n<br>";


	 $to = $_POST['email'];

	 $headers =  'MIME-Version: 1.0' . "\r\n"; 
	 $headers = "Form : $email_from \r\n";
	 $headers .= "Reply-To : $visitor_email \r\n";
	 $headers    .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	$run = mail($to, $email_subject, $email_body, $headers,);

    if($run){
	 	echo "<script>alert('Emaili u dergua me sukses!');location.href='index.php';</script>";
	}else{
		echo "<script>alert('Emaili nuk u dergua me sukses!');location.href='indexemail.php';</script>";
	}



 ?>