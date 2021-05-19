<?php
session_start();
include 'autoload.php';
$errors=[];
$id=$_SESSION['news_id'];

$news= new news;
if($id > 0) 
$news = $news->get($id);
    if(isset($_POST['update_news_btn'])) {
        $titulli = $_POST['titulli'];
        $permbajtja = $_POST['permbajtja'];
        $image=$_POST['image'];

        if(!empty($titulli) && !empty($permbajtja) && !empty($image)){
            if($news->update($id, ['titulli' => $titulli, 'permbajtja' => $permbajtja, 'image'=>$image]))
            header("Location: addnews.php");
            else
                $errors[] = "Something want wrong while updating the product!";
        } else 
            $errors[] = "All fields are required!";
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
<form  enctype="multipart/form-data" method="post">
<div class="form-group">
<label for="titulli">Titulli:</label><br>
<input type="text" name="titulli" id="titulli"  class="form-control" value="<?= $news['titulli'] ?>"/>
</div>
<div class="form-group">
<label for="permbajtja">Permbajtja:</label><br>
<textarea name="permbajtja" id="permbajtja" cols="50" rows="3"  value="<?= $news['permbajtja'] ?>"></textarea>
</div>
<div class="form-group">
</div>
<div class="form-group">
<input type="file" name="images[]" multiple class="form-control" id="image" value=""/>
</div>
<div class="form-group">
<button type="submit" name="update_news_btn"class="btn btn-info btn-block">NDRYSHO</button>
</div>
</form>
</div>
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