<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$titulli=$_POST['titulli'];
	$permbajtja=$_POST['permbajtja'];


	// update user data
	$result = mysqli_query($mysqli, "UPDATE lajmet SET titulli='$titulli',permbajtja='$permbajtja'WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: indexx.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM lajmet WHERE id=$id");

while($news = mysqli_fetch_array($result))
{
	$titulli = $news['titulli'];
	
	$permbajtja = $news['permbajtja'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
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
	width: 40%;
}
</style>
</head>

<body>
	<a href="indexx.php">Home</a>
	<br/><br/>
	<div class="container-fluid mt-4">
	<form name="update_user" method="post" action="edit.php">
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
<button type="submit" name="save_news_btn" class="btn btn-info btn-block">Ndrysho</button>
</div>
		</table>
	</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>