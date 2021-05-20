<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" type="text/css" href="styleforma.css">

<style>
.form{
	margin-top: 10%;
	margin-bottom: 12%;
}

body{
	background-color:  #ccffcc;
}

</style>

</head>

<body>
     <?php
     include('./views/header.php');
     ?>

<div class="form">
     <form action="signup-check.php" method="post">
          <h2>SIGN UP</h2>


          <label>Name</label>
          <input type="text" name="name" placeholder="Name">
          <?php
          if (isset($nameErr['name'])) {
               echo $nameErr['name'];
          }
          ?><br><br>

          <label>User Name</label>
          <input type="text" name="uname" placeholder="User Name">
          <?php
          if (isset($unameErr['uname'])) {
               echo $unameErr['uname'];
          }
          ?><br>


          <label>Email</label>
          <input type="email" name="email" placeholder="Email">
          <?php
          if (isset($emailErr['email'])) {
               echo $emailErr['email'];
          }
          ?><br><br>

          <label>Password</label>
          <input type="password" name="password" placeholder="Password">
          <?php
          if (isset($passwordErr['password'])) {
               echo $passwordErr['password'];
          }
          ?><br><br>


          <label>Re Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>
          <?php
          if (isset($unameErr['re_password'])) {
               echo $unameErr['re_password'];
          }
          ?><br>





          <!-- ketu duhet me nderhy -->
          <!-- <?php if ($_SERVER["REQUEST_METHOD"] == "POST")
                    echo $msgErr['msg'];
               ?> -->

          <!-- 
          <br>
          <br>
          <br> -->

          <button type="submit" name="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</div>


</body>

<?php include('./views/footer.php');


?>

</html>