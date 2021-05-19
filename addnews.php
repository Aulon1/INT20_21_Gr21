<?php
session_start();
include 'autoload.php';
$n = new news; 
$errors=[];
$newss=$n->all();

if(isset($_POST['save_news_btn'])) {
  $titulli = $_POST['titulli'];
  $permbajtja = $_POST['permbajtja'];
 $image="";
 $tmp_name= [];
 
 if(!empty($titulli) && !empty($permbajtja) && !empty($_FILES['image']['name'])) {
  $image = [$_FILES['image']['name']];
  move_uploaded_file($_FILES['image']['tmp_name'], "./image/".$_FILES['image']['name']);

  if($n->create(['titulli' => $titulli, 'permbajtja' => $permbajtja,  'image' => json_encode($image)]))
      header("Location: addnews.php");
  else
      $errors[] = "Something want wrong while adding the product!";
} else 
  $errors[] = "All fields are required!";
}

if(isset($_GET['action']) && ($_GET['action'] == 'edit')) {
  if(isset($_GET['news_id']) && (is_numeric($_GET['news_id'])))  {
      echo "PO";
      $_SESSION['news_id'] = $_GET['news_id'];
      header("Location: edit_news.php");
  } else
      $errors[] = "Product doesn't exist!";
  
}




if(isset($_GET['action']) && ($_GET['action'] == 'delete')) {
  if(isset($_GET['news_id']) && (is_numeric($_GET['news_id'])))  {
      if($n->delete($_GET['news_id'])) 
          header("Location: addnews.php");
      else
          $errors[] = "Something want wrong while deleting product with id: " .$_GET['news_id'];
  } else
      $errors[] = "Product doesn't exist!";
  
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Add News</title>
    <style>
      h3{
        text-align: justify;
      }

.container-fluid form{
    width: 100%;
    margin: auto;
}
</style>
</head>
<body>
    <div class="container my-5">
        <h3>Krijo lajmet</h3>
<div class="row">
<?php
                if(count($errors)) {
            ?>
                <div class="alert alert-danger">
                    <ul>
                   <?php foreach($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php   
                }
            ?>
    <div class="col-nd-8 ">
    <div class="container-fluid mt-4">
<form enctype="multipart/form-data" method="post">
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
</div>
</div>
</div>
<br>

<div class="container my-5">
  <h3>Lajmet</h3>
  <div class="row">

    <div class="col-nd-8">

    <?php if(count($newss)>0):?>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>Titulli</th>
            <th>Data</th>
            <th></th>
          </tr>
          <?php foreach($newss as $news): ?>
                            <tr>
                                <th><?= $news['id'] ?></th>
                                <th><?= $news['titulli'] ?></th>
                                <th><?= $news['create_at'] ?></th>
            

                                <th>
                                    <a href="?action=edit&news_id=<?= $news['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="?action=delete&news_id=<?= $news['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
        </table>
      </div>
      <?php else: ?>
      0 Lajme
      <?php endif; ?>
    </div>

  </div>

</div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
