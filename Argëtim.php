<!DOCTYPE html>
<html manifest="cache.appcache" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Argëtim.css">
    <script src="jquery-3.5.1.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script type="text/javascript">
       $(function() {
       $(".b2").click(function(){
         $(".udhezimet").fadeToggle(1000);
       });
       });
       $(function(){
      $(".animate").mouseleave(function(){
      $("h2").animate({left: '35%'});
  });
});
       </script>
  </head>
  <body>

<?php include('./views/header.php')  ?>



<div class="pjesa1">
  <button type="submit">Have Fun</button>
</div>


<div class="pjesa2">

<div class="titulli1"> 
  <h1>Barcoleta</h1>
  <hr>
</div>



<div class="barcoletat">
 
<div class="barcoleta">
  
</div>




<div class="barcoleta_1">
  <h3>Bjondina</h3>
  <p><br><br><br>Bjondina u rrëzua në shkollë<br>
    Bjondina: Mami, në shkollë u rrëzua një vajzë… <br>të gjithë qeshën, përveç meje.
    
    Mami: Të lumtë bija ime! Po kush u rrëzua?<br>
    
    Bjondina: Unë…</p>
</div>


<div class="barcoleta_2">
<h3>Nastradini</h3>
  <p>
    <br><br><br>Laje djalin
    Gruaja e nastradinit e thirri nastradinin dhe i tha:Ku ku per 
    mu o nastradi ja kum la teshat djalit e jon zvoglU. Kurse nastradini i tha:Ani moj laje edhe djalin qe ti bijen taman</p>
</div>



<div class="barcoleta_3">
  <h3>Polici</h3>
  <p><br><br><br>Shiu po bie dhe jashte…<br>
    Tek po binte shi nje polic po ruante nje dyqan.Shitesja i thote policit.<br>
    Shitesja – zoti polic futuni brenda se po bie shi<brvg>
    Polici – ju faleminderit por po bie dhe jashte…</p>
</div>


<div class="barcoleta_4">
  <h3>Doktoret</h3>
  <p><br><br><br> Petrit, jam cmendur pas teje.<br>

    Mire, mire, por rri larg babait tim.<br>
    
     Pse, eshte i ashper me vajzat qe te vijne rrotull?<br>
    
     Jo, por eshte drejtor i spitalit psikiatri</p>
</div>


</div>


</div>
<br>
<br>
<div class="pjesa3">
<div class="titulli2"><h1>Foto Qesharake</h1><hr></div>

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
  

  <div class="pjesa4">
    <div class="titulli3">
    <h1>Snake Game</h1>
    <hr>
    </div>
    <div class="snake">
     <canvas id="game" width="1000" height="500">
       </canvas>
       </div>
       <div class="animate">
      <h2 style="position: relative;">Udhëzimet Për Lojen
        </h2>
        <hr>     
    </div>
      <button class="b2">Shiko ose Largo</button>
      <div class="udhezimet">
       <div class="levizjet">
         <h3>Lëvizjet</h3>
         <br>
      
        <p>W: Lëviz lart. </p>
        <br>
        <p>S: Lëviz posht.</p>
        <br>
        <p>D: Lëviz djathtas.</p>
        <br>
        <p>A: Lëviz majtas.</p>
      
    
       </div>
      <div class="rregullat">
          <h3>Rregullat</h3>
          <br>
          <ul>
          <li><p>Nëse godet muret ose kufijt humbë!</p></li>
          <br>
          <li><p>Poashtu nëse kafshon veten përseri humbë!</p></li>
          </ul>
      </div>
       
    </div>
    
    <script src="Snake.js"></script>
    </div>
    


    <?php include('./views/footer.php')  ?>
</body>
</html>

