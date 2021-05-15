<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 
/**Gjersia e main, ne anen e majt **/
main{
    width: 75%;
    float: left;
}
/**Gjersia e aside, ne anen e djatht **/
aside{
    width: 25%;
    float: right; 
}
/**Gjersia e titullit, margjina, ngjyra, bakgrandi, kalimi i ngjyrave, rreshtimi i teksitit majtas, madhesia e teksit, hija e tekstit**/
h1{ 
  width: 100%;
  margin: auto ;
  color: #000000;
  background-color: white;
  background-image: linear-gradient(white, gray);
  text-align: left;
  font-size: 40px;
  text-shadow: 2px 2px 4px white;
}




.vija{
    width: 100%;
    height: 6px;
    background-color: black;
}
/**ngjyra e teksiti, hija, bakgrandi, madhesia e teksiti**/

</style> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

  <body>
  <?php include('./views/header.php')  ?>
<div class="LAJMET">
  
  <h1>Lajmet nga vendi</h1>
  <hr class="vija">
<main>

        <a href="addnews.php" target="_blank">
        <button>Shto Lajme</button></a>
    </main>
</div>
<aside>
  <br>
  <!--Videot anash ne aside -->
  <video width="320" height="240"  autoplay loop>
    <source src="stay.mp4" type="video/mp4"> 
  </video>  <hr class="vija" >
  <br>
  <video width="320" height="240" autoplay loop>
    <source src="Covid.mp4" type="video/mp4">
  </video>
  <hr class="vija" >
  <br>
  <h3>Harta e shperndarjes se COVID-19</h3>
  <video width="320" height="240" autoplay loop>
    <source src="harta.mp4" type="video/mp4">
  </video>
  <hr class="vija" >
</aside>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include('./views/footer.php')  ?>
</body>
</html>