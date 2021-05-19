<?php
    session_start();
    include 'autoload.php';
    $news = new news;
    $errors = [];
    ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<title>Lajmet</title>
<style> 
/**Gjersia e main, ne anen e majt **/
main{
    width: 80%;
    float: left;
    margin: 100 100 20 20;
    margin: auto;
}
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}


/* style per logon ky qasmi me nav ne clasen e loges */

nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}


/*style i listave me an te navit */
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}

/*style i linqeve brenda listave ku edhe kemi perdor transiton per te gjitha linqet brenda listav*/

nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}

/*style i linkut te par me clasen aktive ku i kemi dhen ngjyr*/
nav ul li a.active{
  color: #111;
  background: #fff;

}
/*style i linqeve me hover qe kur ti afrojm mausin marrin ngjyr linqet*/
nav ul li a:hover{
  color: #111;
  background: #fff;
}

/*style pjesa e atij butonit kur e zvoglojm faqen qe shfaqet qe esht i mirrem nga google ajo figura*/
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
/*style i inputit me type checkbox*/
input[type="checkbox"]{
  display: none;
}

/*style per screen max te tabletav 1000px*/
@media (max-width: 1000px){
  nav{
    padding: 0 20px 0 30px;
  }
}

/*style per screen te telefonava se si duket ne telefona*/
@media (max-width: 960px) {
  nav .menu-btn i{
    display: block;
    }
    /* style i butnit te menu qe kur zvoglohet hapet e pasta per ta mbyllur shfaq shejen e x */
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active{
    background: none;
    color: cyan;

  }
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}


</style> 
</head>
  <body>
  <nav>
      <div class="logo">
Portal</div>
<input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
<li><a  href="portal.php">Home</a></li>
<li><a class="active" href="Lajme.php">Lajme</a></li>
<li><a href="Shëndetësia.php">Shëndetësia</a></li>
<li><a href="Sport.php">Sport</a></li>
<li><a  href="Argëtim.php">Argëtim</a></li>
<li><a href="Kontakti.php">Kontakti</a></li>
</ul>
</nav>
  <div class="LAJMET">


  <br>


  <h1>Lajmet e fundit</h1>
  <hr class="vija">
<main>
<div class="container my-5">
        <div class="row">
            <?php foreach($news->all() as $news): ?>
                <div class="col-md-4 my-2">
                            <?php
                                $image = json_decode($news['image'], true);
                        {
                            ?>
                                <img src="./image/<?= $image[0] ?>" alt="<?= $news['titulli'] ?>" class="img-fluid" style="height: 220px; display: block; margin: 0px auto;" />
                                <?php }  ?>
                            <h4><?= $news['titulli'] ?></h4>
                            <p>
                            <?= $news['permbajtja'] ?>
                            </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        <a href="addnews.php" target="_blank">
       
</main>
</div> 
<button  class="btn btn-dark btn-lg btn-block">Shto Lajme</button></a>

  </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <?php include('./views/footer.php')  ?>
</body>
</html>