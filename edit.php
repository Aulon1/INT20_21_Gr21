<?php
  
  // Include database file
  include 'customers.php';

  $customerObj = new Customers();

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $customerObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['save_news_btn'])) {
    $customerObj->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
</div><br> 

<div class="container">
<form enctype="multipart/form-data"action="add.php"  method="post"  >
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>