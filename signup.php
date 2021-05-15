
<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="styleforma.css">
</head>

<body>

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
          ?>

          <!-- ketu duhet me nderhy -->
          <!-- <?php if ($_SERVER["REQUEST_METHOD"] == "POST")
               echo $msgErr['msg'];
          ?> -->
          
<!-- 
          <br>
          <br>
          <br> -->

          <button type="submit" name="submit">Sign Up</button>
          <!-- <a href="" class="ca">Already have an account?</a> -->
     </form>

     

</body>

</html>



