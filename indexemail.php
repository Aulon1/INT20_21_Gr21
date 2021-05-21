
<!DOCTYPE html>
<html>
<head>
	<title>Send email</title>
	<link rel="stylesheet" type="text/css" href="styleemail.css">
</head>
<body>

		<div class="contact-title">
			<h1>Say Hello</h1>
			<h2>We are always ready to serve your!</h2>
		</div>

		<div class="contact-form">
			<form id="contact-form" method="post" action="email.php">
				<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
				<br>
				<input type="email" name="email" class="form-control" placeholder="Your Email" required="">
				<br>

				<textarea name="message" class="form-control" placeholder="Message" row="4" required=""></textarea>
				<br>
				<input type="submit" name="" class="form-control submit" value="SEND MESSAGE">
			</form>
		</div>



</body>
</html>
