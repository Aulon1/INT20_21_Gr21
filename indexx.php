<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM lajmet ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


</head>

<body>
<a href="add_data.php">Add New News</a><br/><br/>

    <table width='80%' border='1'>
   <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>Titulli</th>
            <th>Data</th>
            <th>Edit/Delete</th>
          </tr>


<?php
    while($news = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$news['id']."</td>";
        echo "<td>".$news['titulli'] ."</td>";
        echo "<td>".$news['create_at'] ."</td>";
        echo "<td><a href='edit.php?id=$news[id]'>Edit</a> | <a href='delete.php?id=$news[id]'>Delete</a></td></tr>";
    }
    ?>
    </div>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>