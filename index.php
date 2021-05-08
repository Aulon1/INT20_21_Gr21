<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="jquery-3.5.1.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type="text/javascript">
       $(function() {
        $(".b1").click(function(){
          $(".j1").toggle();
        });
        }); 
        $(function() {
        $(".b2").click(function(){
          $(".j2").fadeToggle(1000);
        });
        });  
        $(function() {
        $(".b3").click(function(){
          $(".j3").slideToggle(1000);
        });
        });
        $(function() {
        $(".b4").click(function(){
          $(".j4").fadeToggle(1000, function(){
      alert("Shtypni përsëri që të shfaqni ose fshehni");
        });
        });
        });      
        $(function(){
        $(".l1").text("Lajmet");
        });
        $(function(){
        $("#sh1").append("i");
        });
        $(function(){
        $(".hekja").removeAttr("class");
        });
       
    </script>
    <style>
      .article{
      width:50%;
      float:none;
      max-width: 60%;
   }
   .article p{
      font-size: 20px;
      text-align: left;

   }
   
   .article img{
      width: 90%;
      bottom: 15px;
      
 }
 #article_1{
   
  float:left;
    width:50%;
 }
 #article_2{
  
  float:right;
    width:50%;
 }
 
 .article h2{
   text-decoration: none;
   margin: auto;
   font-size: 18px;
   color: black;
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portal.css">

  </head>
  <body>
  <?php include('./views/header.php')  ?>



<div class="pjesa1">
  <h1>Mirë se vini në Portal

    <hr>
  </h1>
  
</div>
<!--Lajmet-->
<div class="PjesaLajmeve">
  <div class="Titulli1">
  <a href="Lajme.html" style="text-decoration: none; color: black;">
   <h2 class="l1">Lajmet e fundit</h2>
   </a><hr>
   
   </div>
   <div class="j1">
<div class="lajmet">
  
  <hr class="vija">
  <div class="lajme">
    <a href="Lajmi_1.html" target="blank">
    <img src="lajmi1.jpg" alt="Lajmi pare">
      <h2>Bie qeveria Hoti, Kushtetuesja e çon Kosovën në zgjedhje brenda 40 ditësh</h2>
      <p>Gjykata Kushtetuese e Kosovës ka hedhur poshtë votën e deputetit Etem Arifi, vendimtare në formimin e qeverisë së kryesuar nga Avdullah Hoti, dhe ka urdhëruar mbajtjen e zgjedhjeve të parakohshme parlamentare.</p>  
</a></div>
  <div class="lajme">
    <a href="Lajmi_2.html" target="blank">
    <img src="l2.jpg" alt="Lajmi dyte"> 
      <h2>Mërgimtarët sërish ballafaqohen me pritjet kufitare – kolona automjetesh në kufirin Kroaci-Slloveni</h2> 
    <p>Nga 1 janari, bashkatdhetarët që kanë qëndruar për festat e fundvitit në Kosovë, tani po kthehen në vendet ku punojnë dhe veprojnë.Por, sërish edhe për t’u kthyer ata po hasin në pengesa të ndryshme.   </p>
   </a></div>
  <div class="lajme">
    <a href="Lajme_6.html" target="blank">
    <img src="l6.jpg" alt="Lajmi trete">
    
    <h2>Bill Gates parashikon që jeta do të ‘kthehet në normalitet’ në vitin 2021 pas ‘vitit shkatërrues’</h2>
    <p>Bill Gates, i cili ka një vlerë neto të vlerësuar prej 120.1 miliardë dollarësh, tha se bota “nuk është në pyll” por beson se ka “lajme të mira që vijnë në vitin 2021” ndërsa vaksinat përhapen.</p>
    </a>
  </div>
</div>
</div>
</div>
<br>
<button class="b1" > 
<div class="A">
    <a href="Lajme.html"><p>Lexo më shumë</p></a>
    </div></button>
  


    <!--Shendetsia-->
<div class="PjesaShendetesis">
  <div class="Titulli2">
  <a href="Shëndetësia.html" style="text-decoration: none; color: black;">
    <h2 class="hekja">Shëndetësia</h2>
    <hr>
  </a>
  <button class="b2" > Hiq ose shiko</button>
  </div>
  <div class="j2">
    <figure  >
      <img src="MasatKryesore.jpg" height="200px" width="50%" align="left" alt="Masat Kryesore ndaj Covid-19"/>
      </figure>
      <figure  > 
        <img src="https://images.bisnis-cdn.com/posts/2020/06/10/1250747/vaksin-virus-corona-covid-19.jpg" align="right" height="200px" width="50%" alt="vaksin-virus-corona-covid-19"> 
      </figure>
    </br></br></br></br></br></br></br></br></br>
     <article style="border:1px solid black; width: 49%; height:180px;position:absolute;"> Deri tani janë aprovuar disa vaksina nga Kina,SHBA,Rusia por disa prej tyre nuk i kanë kaluar të gjitha fazat pë tu përdorur. Vaksina Pfizer dhe Biontech është një vaksinë nga Gjermania që u aprovua në shumë vende dhe poashtu po përdoret në disa prej tyre. Gjithashtu vaksina pritet të vij edhe në Shqipëri dhe Kosovë por nuk dihet data e saktë. Kjo vaksinë është 95% efektive, një përqindje e lartë dhe ndër më të lartat kundrejt vaksinave tjera. Vetëm 5% e tyre kanë pasur efekte anësore si kokëdhimbje dhe lodhje.  </article>
    <article style="border:1px solid black; width: 49%; height:180px;position:absolute; right:0 ;"> Sa më shumë përhapet një virus aq më shumë mutacione(variante) shfaqen.Një prej varianteve më të përfolur është ai britanik që përmban mbi 20 mutacione, tetë prej të cilave në zgjatimet që i shërbejnë virusit për të penetruar dhe infektuar qelizat e njeriut. Këto zgjatime janë në shenjestër të kurave mjekësore dhe vaksinave kundër koronavirusit.Shkencëtarët besojnë se vaksinat që janë miratuar deri tani do të jenë të efektshme edhe kundër variantit të ri, por ende vazhdon puna për ta konfirmuar këtë bindje.Deri atëherë zbatoni masat. 
       </article></br></br></br></div>
</div>


<!--Sporti-->
<div class="PjesaSport">
  <div class="Titulli3">
  <a href="Sport.html" style="text-decoration: none; color: black;"> 
    <h2>Sport</h2>
    <hr>
  </a>
  <button class="b3" > Hiq ose shiko</button>
  </div>
  <div class="j3">

    <div class="slajmet">
      <div class="lajmi_1">
        <a href="slajmi_2.html" target="_self">
          <img src="slajmi_1.jpg" alt="Fotoja pare">
         <h2>Kush  është  më  i  miri  në  futboll  – Maradona, Messi apo Ronaldo? <br>Klopp jep përgjigjen e tij !</h2>
         <p> Jurgen Klopp ka dhënë mendimet e tij rreth legjendës së futbollit, Diego Maradona që ndërroi jetë në këtë javë.
          Argjentinasi u nda nga jeta këtë të mërkurën. 
        </p>
        
        </a>
      </div>
      <div class="lajmi_2">
        <a href="slajmi_3.html" target="_self">
          <img src="slajmi_2.jpg" alt="Fotoja dyte">
          <h2>Tyson Fury akuzon Anthony Joshuan se ka gënjyer në taktikat për mega meçin që pritet të realizohet gjatë këtij viti.</h2>
          <p>Fury ka përgënjeshtruar  Joshuan se ky i fundit ka taktikat se si mund ta fitojë mega meçin që mund të realizohet në këtë vit.
            Dy boksierit britanikë janë afër marrëveshjes.
            </p>
        </a>
      </div>    
      <div class="lajmi_4">
        <a href="slajmi_5.html" >
          <img src="slajmi_4.jpg" alt="Fotoja e kater">
          <h2>&Ccedil;iklizmi apo ecja? Cilën duhet ta preferoni më shumë?&Ccedil;farë ndodh nëse e përdorni shumë rrallë një makinë?</h2>
          <p>Çfarë ndodh nëse e përdorni shumë rrallë një makinë?
             Me siguri se me kohën nuk do të funksionojë siç duhet, 
             ose do të prishet e gjitha.
             Thuajse e njëjta rregull aplikohet edhe te trupi.
          </p>
        </a>
      </div>
    </div>
    </div><br>
  <div class="lexomeshum">
    <a href="Sport.html"><p>Lexo me shume</p></a>
  </div>
</div>








<div class="PjesaArgetim">
  <div class="Titulli5">
  <a href="Argëtim.html" style="text-decoration: none; color: black;"> 
    <h2 id="sh1">Argëtim</h2>
    <hr>
  </a>
  </div>

<div class="titulliA"><h2>Foto Qesharake</h2><hr></div>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 6</div>
      <img src="h6.1.jpg" style="width:100%">
      
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 6</div>
      <img src="h2.2.jpg" style="width:100%">
    
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 6</div>
      <img src="h3.1.jpg" style="width:100%">
     
    </div>
    
    
    <div class="mySlides fade">
      <div class="numbertext">4 / 6</div>
      <img src="h4.1.jpg" style="width:100%">
     
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">5 / 6</div>
      <img src="h1.1.jpg" style="width:100%">
     
    </div>
    
    
    <div class="mySlides fade">
      <div class="numbertext">6 / 6</div>
      <img src="h7.1.jpg" style="width:100%">
     
    </div>
    
    
    <a class="prapa" onclick="plusSlides(-1)">&#10094;</a>
    <a class="para" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span> 
    </div>
  </div>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>


</div>


<?php include('./views/footer.php')  ?>

</body>
</html>









