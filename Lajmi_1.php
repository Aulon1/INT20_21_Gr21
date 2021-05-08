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
<h1>Bie qeveria Hoti, Kushtetuesja e çon Kosovën në zgjedhje brenda 40 ditësh</h1>
<img src="lajmi1.jpg" alt="">
<p>Gjykata Kushtetuese e Republikës së Kosovës sipas burimeve të Gazetes Express ka nxjerrë aktgjykimin për ankesën e Lëvizjes Vetëvendosje lidhur me votën e deputetit, Etem Arifi, e cila ishte vendimtare për krijimin e Qeverisë së drejtuar nga Avdullah Hoti.

    Vendi pritet të shkojë në zgjedhje brenda 40 ditësh, meqë Gjykata Kushtetuese ka kontstatuar që vota e deputetit, Etem Arifi, pro krijimit të Qeverisë Hoti, ka qenë e pavlefshme.
    
    Lidhja Demokratike e Kosovës kishte krijuar Qeverinë e re pas rrëzimit të Kurtit në Kuvendin e Kosovës me një mocion mosbesimi. Në Qeveri Hoti i kishte marrë edhe AAK-në dhe NISMA-n, duke krijuar kështu një Qeveri e cila në vazhdimësi ka qenë e brishtë me numra.</p>
<br>
<p>
    Lëvizja Vetëvendosje lëndën për votën e Etem Arifit e kishte dërguar në Gjykatën Kushtetuese më 11 korrik të këtij viti. Sipas partisë që drejton Kurti, Etem Arifi, s’kishte pasur legjitimitet në momentin kur kishte votuar, meqë ishte dënuar nga Gjykata me vendim të prerë.

Lidhur me ankesën e Lëvizjes Vetëvendosje për votën e Etem Arifit, Gjykata Kushtetuese kishte mbajtur një seancë dëgjimore publike, ku kishte marrë pikëpamjet e të gjitha palëve lidhur me votën e deputetit Arifi.

Nga Qeveria, insistonin se vota e Arifit ka qenë legjitime, derisa përafqësuesi i VV-së, zëshëm thoshte se Arifi s’ka pasur legjitimitet në momentin kur ka votuar.

Deputeti Arifi është dënuar me 1 vit e 3 muaj burgim nga Gjykata e Apelit për mashtrim me subvencione.Ndonëse i dënuar, Arifi kishte votuar pro formimit të qeverisë Hoti në seancën e 3 qershorit.
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