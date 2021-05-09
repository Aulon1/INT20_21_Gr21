<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /** Gjersia e faqes, margjina, ngjyra e bakgraundit,  **/
.LAJMET{
    width: 100%;
    margin: auto ;
    margin-top: 0px;
    background-color: white;

}
/**Gjersia e main, ne anen e majt  **/
main{
    width: 75%;
    float: left;
}
/**Gjersia e main, ne anen e djatht **/
aside{
    width: 25%;
    float: right;
}
/** Vija ndarese, gjeresia,lartesia dhe ngjyra **/
.vija{
    width: 100%;
    height: 6px;
    background-color: black;
}
/** Gjersia e fotos, margjina**/
.LAJMET img{
    display: block;
    width: 70%;
    margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
    </style>
  </head>
  <body>
  <?php include('./views/header.php')  ?>
    <div class="LAJMET">
    <main>
<h1>Mërgimtarët sërish ballafaqohen me pritjet kufitare – kolona automjetesh në kufirin Kroaci-Slloveni</h1>
<img src="l2.jpg" alt="">
<p>

   Nga 1 janari, bashkatdhetarët që kanë qëndruar për festat e fundvitit në Kosovë, tani po kthehen në vendet ku punojnë dhe veprojnë.Por, sërish edhe për t’u kthyer ata po hasin në pengesa të ndryshme, dhe pritje të gjata kufitare.


 
    </p>
<br>
<p>
    Në një foto dërguar Telegrafit, shihen kolona të gjata të automjeteve në kufirin Kroaci-Slloveni.

Siç thonë mërgimtarët, gjatësia e kolonës arrin deri 12 kilometra.
</p>
    </main>
    <aside>
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
 
    <?php include('./views/footer.php')  ?>
</body>
</html>