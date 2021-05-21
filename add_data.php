<html>
<head>
	<title>Add Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      h3{
        text-align: justify;
      }

.container-fluid form{
    width: 60% ;
    margin: auto;
}
.form-group{
	width: 50%;
}
</style>
</head>

<body>
	<a href="Lajme.php">Go to Home</a>
	<br/><br/>
	<div class="container-fluid mt-4">
	<form action="add_data.php" method="post" name="form1">
	<div class="form-group">
<label for="titulli">Titulli:</label>
<input type="text" name="titulli" id="titulli" placeholder="Titulli i lajmit..." class="form-control">
</div>
<div class="form-group">
<label for="permbajtja">Permbajtja:</label><br>
<textarea name="permbajtja" id="permbajtja" cols="50" rows="3" placeholder="Permbajtja e lajmit..."></textarea>
</div>
<div class="form-group">
 <label for="image">Images</label>
 <br />
<input type="file" name="image" />
                    </div>
<div class="form-group">
<button type="submit" name="save_news_btn" class="btn btn-info btn-block">SHTO</button>
</div>
	</form>

	<?php

	// Check If form submitted, insert form data into news table.
	if(isset($_POST['save_news_btn'])) {
    $titulli = $_POST['titulli'];
	$permbajtja= $_POST['permbajtja'];
    $image=$_POST['image'];

		// include database connection file
		include_once("config.php");

		// Insert news data into table
		$result = mysqli_query($mysqli, "INSERT INTO lajmet(titulli,permbajtja, image) VALUES('$titulli','$permbajtja', '$image')");

		// Show message when news added
		echo "User added successfully. <a href='indexx.php'>View News</a>";
	 }
	?>
	<?php
?>
   
	</div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>