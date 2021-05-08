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
/**GJeresia e tabeles, bakgrandit,**/
.Table table{
    background-color:white ;
    width: 100%;
    border-collapse: collapse;
   
}
/**Gjeresia e fotos**/
.Table img{
    width: 97%; 
}
/**madhesia e teksiti, vendosja majtas**/
.Table h2{
    text-align: left;
    font-size: 16px;
    position: relative;
  bottom: 80px;
}
/**Madhesia e tekstit,**/
.Table p{
  text-align: justify;
  font-size: 15px;
 
}
/**Gjeresia**/
#lajmi_1{
    width: 65%;
    padding: 0px;  
}
/**poszicioni i fotos, gjeresia **/
#lajmi_1 img{
    position: relative;
    width: 99%;
    bottom: 110px;
  
}
/**pozioni i paragrafit, **/
#lajmi_1  p{
    position: relative;
    bottom: 80px;
    padding: 10px;
}


/** linku ne tabel, kur eshte aktiv, vizitohet etj**/
.Table a:link {
    color: black;
    text-decoration: none;
}
.Table a:visited {
    color: rgb(29, 29, 85);
 
    text-decoration: none;
}
.Table a:hover {
    color: black;
    text-decoration: none;
}
.Table a:active {
    color: black;
    text-decoration: none;
}
/**Vija ndaresi, lartesia, gjeresia, ngjyra e bakgrandit**/
.vija{
    width: 100%;
    height: 6px;
    background-color: black;
}
/**ngjyra e teksiti, hija, bakgrandi, madhesia e teksiti**/
.A p{
  color: white;
  text-shadow: 2px 2px 4px #000000;
  background-color: black;
  background-attachment: fixed;
  font-size:20px;
}

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
  <!--Tabela e par lajmet nga vendi -->
  <div class="Table"> 
    <table>
      <tr>
           <td rowspan="2" id="lajmi_1">
            <img src="lajmi1.jpg" alt="Lajmi pare"><a href="Lajmi_1.php" target="blank">
            <h2>Bie qeveria Hoti, Kushtetuesja e çon Kosovën në zgjedhje brenda 40 ditësh</h2></a>
            <p>Gjykata Kushtetuese e Kosovës ka hedhur poshtë votën e deputetit Etem Arifi, vendimtare në formimin e qeverisë së kryesuar nga Avdullah Hoti, dhe ka urdhëruar mbajtjen e zgjedhjeve të parakohshme parlamentare.</p>  
          
            </td>
            <td id="lajmi_2">
              
              <img src="l2.jpg" alt="Lajmi dyte"> <a href="Lajmi_2.php" target="blank">
                <h5>Mërgimtarët sërish ballafaqohen me pritjet kufitare – kolona automjetesh në kufirin Kroaci-Slloveni</h5>  </a>
              <p>Nga 1 janari, bashkatdhetarët që kanë qëndruar për festat e fundvitit në Kosovë, tani po kthehen në vendet ku punojnë dhe veprojnë.Por, sërish edhe për t’u kthyer ata po hasin në pengesa të ndryshme.   </p>
  
            </td>
       </tr>
       <tr>
            <td id="lajmi_3">
              <img src="l1.png" alt="Lajmi trete">
            <a href="Lajmi_3.php" target="blank">
          <h5>Viti 2020 ka pasur zhvillime të jashtëzakonshme politike dhe nuk ka qenë aspak i lehtë për qytetarët e Kosovës.</h5>  
         </a> 
        <p>Përveç ngjarjeve politike, si formimi dhe rënia e dy qeverive, ftesat e Gjykatës Speciale për ish-liderët e UÇK-së, dialogu Kosovë-Serbi etj, vendi është përballur edhe me pandeminë COVID-19.</p>
      </td>
       </tr>
    </table>
  </div>
  
    <div class="A">
      <a href="Lajme.php" target="blank"><p>Lexo më shumë</p></a>
      </div>
      <h1>Lajmet nga bota</h1>
<hr class="vija">
<!--Tabela e dyt lajmet nga bota-->
  <div class="Table"> 
    <table>
      <tr>
           <td rowspan="2" id="lajmi_1">
            <img src="lajmi3.jpg" alt="Lajmi katert">   
            <a href="Lajmi_4.php" target="blank">
            <h2>Joe Biden fiton zgjedhjet presidenciale në SHBA</h2> </a>
            <p>Kandidati i demokratëve, Joe Biden, sipas raportimeve të njëzëshme të disa mediave amerikane ka fituar zgjedhjet presidenciale në SHBA pas fitores në Pensilvani. Trump duket se nuk e njeh rezultatin.</p>
            
            </td>
            <td id="lajmi_2">
              <img src="lajmi2.jpg" alt="Lajmi peste">
              <a href="Lajmi_5.php" target="blank">
              <h5>Masa të reja në mbarë botën pas variantit të ri të koronavirusit</h5></a>
              <p>Kreu i Organizatës Botërore të Shëndetësisë po bën thirrje për intensifikim të studimit të sekuencës gjenetike të koronavirusit pas zbulimit të varianteve të reja.</p>
  
            </td>
       </tr>
       <tr>
            <td id="lajmi_3">
              <img src="l6.jpg" alt="Lajmi gjashte">
        <a href="Lajme_6.php" target="blank">
        <h5>Bill Gates parashikon që jeta do të ‘kthehet në normalitet’ në vitin 2021 pas ‘vitit shkatërrues’</h5></a>
        <p>Bill Gates, i cili ka një vlerë neto të vlerësuar prej 120.1 miliardë dollarësh, tha se bota “nuk është në pyll” por beson se ka “lajme të mira që vijnë në vitin 2021” ndërsa vaksinat përhapen.</p>
             </td>
       </tr>
    </table>
  </div>
  <div class="A">
  <a href="Lajme.html" target="blank"><p>Lexo më shumë</p></a>
  </div> 
  <hr class="vija" >
 
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

<?php include('./views/footer.php')  ?>
</body>
</html>