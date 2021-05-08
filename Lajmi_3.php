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
<h1>Top ngjarjet e vitit 2020 – ballafaqimi me pandeminë, rrëzimi i dy qeverive dhe aktakuzat e para nga Specialja</h1>
<img src="l1.png" alt="">
<p>
    Përveç ngjarjeve politike, si formimi dhe rënia e dy qeverive, ftesat e Gjykatës Speciale për ish-liderët e UÇK-së, dialogu Kosovë-Serbi etj, vendi është përballur edhe me pandeminë COVID-19.
</p>

<br>
<p>
Gjatë këtij viti po ashtu është arritur një marrëveshje ekonomike në Washington në mes të Kosovës dhe Serbisë, në praninë e presidentit amerikan Donald Trump, ndërsa tetori gjeti Kosovën me një ndër skandalet më të mëdha, atë të vjedhjes të 2.1 milionë eurove nga Thesari i Shtetit.

Më poshtë, Telegrafi.com ju sjellë një kronologji të ngjarjeve kryesore që kanë shënuar vitin 2020.</p>
<h3>Nënshkrimi i marrëveshjes për bashkëqeverisje LVV-LDK</h3>
<img src="l11.jpg" alt="">
<p>
    Në atë kohë, edhe kryetari i LDK-së, Isa Mustafa kishte thënë se kanë arritur marrëveshje që është në dobi të Kosovës dhe është në interes të ndryshimeve që duhet të ndodhin në vend.
</p>
<br>
<p>Mocioni i mosbesimit- bie Qeveria Kurti

    Në kohën kur vendi përballej me pandeminë, edhe zhvillimet politike ishin në kulm. Lidhja Demokratike e Kosovës, partneri në koalicion i Lëvizjes Vetëvendosje, kishte ngritur mocion mosbesimit për të rrëzuar Qeverinë Kurti.</p>
    <h3>Votimi i Qeverisë Hoti</h3>
    <img src="l111.jpg" alt="">
    <p>
        Më shumë se një muaj pas arritjes së marrëveshjes për bashkëqeverisje ndërmjet LDK dhe AAK-së, më 3 qershor Kuvendi i Kosovës me 61 vota pro, 24 kundër dhe 1 abstenim kishte votuar për Qeverinë Hoti.

Qeveria Hoti ishte votuar pas vendimit të Gjykatës Kushtetuese, që i kishte dhënë të drejtë presidentit të atëhershëm të Kosovës, Hashim Thaçi në mandatimin e Hotit për formim të qeverisë së re.
    </p>
    <h3>
        Vazhdimi i dialogut Kosovë-Serbi
    </h3>
    <p>
        Pas një pauze në dialogun Kosovë-Serbi, në korrik të 2020 presidenti i Francës, Emmanuel Macron dhe kancelaraja gjermane, Angela Merkel kishin dalë me një deklaratë të përbashkët pas mbajtjes së Samitit të Parisit, ku u bë e ditur se dialogu mes Kosovës e Serbisë do të rifillojë më 12 korrik të 2020-së me një video-konferencë, ndërkaq po ashtu më 16 korrik do të vazhdohet me takimin në Bruksel.
    </p>
    <h3>
        Rimëkëmbja ekonomike
    </h3>
    <img src="l1111.jpg" alt="">
    <p>
        Më 4 dhjetor 2020, Kuvendi i Kosovës miratoi edhe Ligjin për Rimëkëmbje Ekonomike me 13 amendamente të propozuara, ndërsa kjo përfshinë edhe tërheqjen e 10 përqindëshit nga Trusti. Me këtë Ligj subvencionohen bizneset me fond prej 200 milionë euro dhe mbulesa e tre pagave për qytetarët e larguar nga puna gjatë pandemisë COVID-19.
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