<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="jquery-3.5.1.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>


  <?php include('./views/header.php')  ?>


<figure  >
<img src="MasatKryesore.jpg" height="300px" width="50%" align="left" alt="Masat Kryesore ndaj Covid-19"/>
</figure>
<figure  > 
  <img src="https://images.bisnis-cdn.com/posts/2020/06/10/1250747/vaksin-virus-corona-covid-19.jpg" align="right" height="300px" width="50%" alt="vaksin-virus-corona-covid-19"> 
</figure></br>

<h1 align="center">Lajmet Covid-19</h1>
<p style="border:1px solid black;"> Manuali për mbrojtjen nga përhapja e virusit COVID-19 është publikuar nga ministria e shëndetësisë dhe mund ta lexoni në linkun më poshtë.</p>
<a style="border:1px solid black" href="https://omk-rks.org/wp-content/uploads/2020/06/Manual-p%C3%ABr-parandalimin-dhe-luftimin-e-COVID19.pdf" target=_blank>
 Linku </a>
 <div class="media1" >
 <article  style="border:1px solid black; width: 49%; height:180px;position:absolute; word-wrap: normal;"> 
 <p>
 <?php
 $stringu1 = "Deri tani janë aprovuar disa vaksina nga Kina,SHBA,Rusia por disa prej tyre nuk i kanë kaluar te gjitha fazat për tu përdorur. 
 Vaksina Pfizer dhe Biontech është një vaksinë nga Gjermania që u aprovua në shumë vende dhe poashtu po përdoret në disa prej tyre. 
 Gjithashtu vaksina pritet të vij edhe në Shqipëri dhe Kosovë por nuk dihet data e saktë. 
 Kjo vaksinë është 95% efektive, një përqindje e lartë dhe ndër më te lartat kundrejt vaksinave tjera. 
 Vetëm 5% e tyre kanë pasur efekte anësore si kokëdhimbje dhe lodhje." ;
 
 $pattern = '/te/';
 $replace = "të";
 echo preg_replace($pattern,$replace,$stringu1);

 ?>
 </p>
</article></div>
 <div >
 <article style="border:1px solid black; width: 49%; height:180px;position:absolute;right:0; "> 
 <p>
<?php

  $stringu2 ="Sa më shumë përhapet nje virus aq më shumë mutacione(variante) shfaqen,
 nje prej varianteve më të përfolur është ai britanik që përmban mbi 20 mutacione, 
 tetë prej të cilave në zgjatimet që i shërbejnë virusit për të penetruar dhe infektuar qelizat e njeriut. 
 Këto zgjatime janë nje shenjestër të kurave mjekësore dhe vaksinave kundër koronavirusit.
 Shkencëtarët besojnë se vaksinat që janë miratuar deri tani do të jenë të efektshme edhe kundër variantit të ri, 
 por ende vazhdon puna për ta konfirmuar këtë bindje.Deri atëherë zbatoni masat.";
 $pattern = '/nje/';
 $replace = "një";
 echo preg_replace($pattern,$replace,$stringu2);


?>
</p>
</article></div>
  </br></br></br></br></br></br></br></br>
   <h1 style="text-align:center;">Këshilla mjeksore </h1></br>
   <section style="width:30%;position:absolute;left:0">
    <h4>Ushqimet për kocka të forta</h4>
    Çfarë nevojitet për të pasur kocka të forta?</br>
    Sa mg kalcium duhet të konsumojmë gjatë një dite?</br>
    Cili është vakti më i mirë për tu ushqyer me kalcium?</br>
    Cilat janë ushqimet më të pasura me kalcium?<br>
    Këto dhe më shumë përgjigje i gjeni në linkun mëposhtë.
    <a href="Kockateforta.php" > Linku  </a>
  </section>
   <section style="width:30%;position:absolute;left:33%">
   <h4>Dhjami në regjionin e belit</h4> 
   Ku akumulohet dhjami i trupit?<br>
   Çfarë shkakton mund të shkaktoj dhjami në pjesën e belit?<br>
   Si mund ta reduktoni dhjamin në zonën e belit?<br>
   Çfarë të pini për rënie në peshë?<br>
   Këto dhe më shumë përgjigje i gjeni në linkun mëposhtë.
   <a href="Dhjami.php" ><br> Linku  </a>

  </section>
  <section style="width:30%;position:absolute;right:0">
    <h4>Ndikimi i sheqerit në imunitet</h4>
    Çfarë efekti mund të ketë sheqeri?</br>
    Përse është sheqeri shumë i rrezikshëm për shëndetin gjatë pandemisë</br>
    Në cilat mosha janë të rrezikuar njerzit me sëmundje shoqëruese nga Covid-19?<br>
    Si ndikon sëmundjet e sheqerit në Covid-19?</br>
    Këto dhe më shumë përgjigje i gjeni në linkun mëposhtë.
    <a href="Sheqeri.php" > Linku  </a>

  </section></br></br></br></br></br></br></br></br></br>
 
<h1 style="text-align: center;" > Aktivitete fizike</h1></br>
<svg height="200" width="200">
  <ellipse cx="20" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.
  
<svg height="200" width="200">
  <ellipse cx="25" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG. 
  <ellipse cx="30" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.  
  <ellipse cx="35" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.  
  <ellipse cx="40" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG. 
</svg>

  <svg height="100" width="200">
  <line x1="50" y1="50" x2="180" y2="50" style="stroke:black;
  stroke-width:2;" />
  Sorry, your browser does not support inline SVG.
</svg>
  <svg height="300" width="300">
  <line x1="50" y1="70" x2="180" y2="70" style="stroke:black;
  stroke-width:2" />
  Sorry, your browser does not support inline SVG.
</svg>
<svg height="300" width="300">
  <ellipse cx="165" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.  
<svg height="300" width="300">
  <ellipse cx="170" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG. 
  <ellipse cx="175" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.  
  <ellipse cx="180" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG.  
  <ellipse cx="185" cy="60" rx="10" ry="50" style="fill:gray;stroke:black;stroke-width:2" />
  Sorry, your browser does not support inline SVG. 
</svg>
</svg>
</svg>
<img src="https://mongooseagency.com/files/3415/9620/1413/Return_of_Sports.jpg" style="height: 300px; margin-left: 8%; width: 38%;" >
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6m-qe5sQpKXNowsEibT9OKg0Gp9GgqPru3w&usqp=CAU"  style="height: 300px; width: 38%; margin-left: 2%;"> 

<p></br>
  <h2  style="text-align: center;"><b>Fitnesi</b></h2></br>
  Fitnesi, sporti i trupit të bukur, ka pushtuar botën. Janë miliona persona në botë, që i janë përkushtuar me devotshmëri stërvitjes së ëmbël të muskujve, me synimin e krijimit të trupit perfekt dhe pa dhjamë e të kërkimit të rinisë së përjetshme.
  Fitnesi fizik përfshin dy koncepte që janë të lidhura me njëra-tjetrën: fitnesi i përgjithshëm (që parakupton ushtrimet për të pasur një gjendje të mirë shëndetësore) dhe fitnesin specifik (një detyrë e orientuar mbi bazën e aftësisë për të performuar aspekte specifike të sporteve apo okupimeve).</br></br>
  <b>Gjashtë programe ushtrimesh</b></br>
  Duke iu referuar, një programi të përgjithshëm fizik fitnesi, mund të dallohen gjashtë programe ushtrimesh me qëllime të ndryshme: fitnesi kardiovaskulare, trajnimi fleksibël, trajnimi i forcës së përgjithshme, kalitja e muskujve, kompozimi i trupit dhe trajnimi i aftësive të përgjithshme. Gjithsesi, përveç këtyre programeve me komponentë esenciale, ushtrimet bazohen në programe individuale të fokusuara në aftësitë specifik, moshën e individit ose në nevojat të për një shëndet të mirë.</br></br>
  <b>Trekëndëshi i fitnesit</b></br>
  Shumë e konsiderojnë fitnesin si me ndikim të drejtpërdrejtë edhe në shëndetin mendor. Kjo e fundit paraqitet në tekstet e librave si një “trekëndësh të ndërtuar mbi tri pika, të cilat paraqesin fitnesin fizik, emocional dhe mendor”. Fitnesi fizik mund të parandalojë ose të trajtojë shumë nga sëmundjet kronike të një jete të pashëndetshme ose për shkak të moshës. Të punosh fitnes mund të ndihmojë të flesh më mirë. Të jesh i shëndetshëm është e rëndësishme edhe në aktivitetet fizike.</br></br>
  <b> Pesë komponentët klasikë</b></br>
  Pesë komponentet klasikë të fitnesit janë fuqia muskolore, kalitja e muskujve, kompozimi i trupit, durimi kardiovaskular dhe fleksibiliteti. Gjithsesi, këtyre u shtohen shpesh edhe fuqia e shpejtësia. Përpara se të ushtrohesh në programe fitnesi është e këshillueshme që të kryesh një vizitë mjekësore, përmes së cilës mjeku do të rekomandojë më pas se për cilat ushtrime je i aftë të kryesh. Trajneri personal luan një rol të dorës së parë te individët që dëshirojnë të ushtrohen. Shumë trajnerë personalë mund ta punojnë në qendrat e fitnesit, por mund të asistojnë edhe klientët në shtëpitë e tyre. Trajneri përveçse ekzkutimit të ushtrimit mësimor dhe instruktimit teknik të tij, ndikon edhe në motivimin e individit si pikë referimi.</br></br>
  <b>Indeksi i masës së trupit</b></br>
  Mbipesha është një gjendje mjekësore në të cilën trupi i dhjamosur mund të ndikojë në shëndetin e individit, duke influencuar edhe në reduktimin e jetëgjatësisë ose rritur problemet shëndetësore. Indeksi i masës së trupit (ose anglisht Body mass index – BMI), është një masë që krahason peshën dhe gjatësinë, përcakton njerëzi si më mbipeshë (paraobezë) nëse masa e BMI-së së tyre është midis 25 kg/m2 dhe 30 kg/m2, një trup obez është më i madh se 30 kg/m2.</br></br>
  <b>100 ushtrime për një trup perfekt </b></br>
  Fitnesi, sporti i trupit të bukur, ka pushtuar botën. Të shumta janë botimet e revistat që i kushtohen stërvitjes së ëmbël të muskujve, duke filluar që nga ato që reklamojnë “100 ushtrime për një trup perfekt”, e deri te “dieta e pjatës me fruta deti” të patretur në gjalpë, e ku karkalecat zënë pjesën e luanit, por të shoqëruar me spec të kuq e të “qullur” me lëng limoni të freskët.</br></br>
  <b>Djegie kalorish, dobësim në 48 orë</b></br>
  Fundjava është koha e “pikut” të sallave të fitnesit. Përmes instruktorëve mund të gjesh programe të “dobësimit në 48 orë”, pas një pune stresuese nga e hëna deri të premten. “Bëj ushtrime të shtunën dhe të dielën, duke bërë kërcime me litar, vrapime në pistën lëvizëse. Kompletoje çdo ditë duke bërë dy herë këtë rit për të djegur rreth 256 kalorie një sesion prej 30 minutash”.
</br></br>
  <b>Fitnes amator, pompat e famshme</b></br>
  Në fakt, çdo ushtrim i karakterit fizik, edhe pse nuk mund të konsiderohet një ushtrim fitnesi i pastër, gjithsesi ka një ngjashmëri “amatore” me veprimit profesional. “Ulje-ngritjet”, apo “pompat” në zhargonin popullor zhvillojnë muskujt e gjoksit e të shpatullave. Por edhe ecja e bazuar mbi duart rekomandohet shpesh pasi ndikon në zhvillimin e muskujve të pjesës së shpinës.</br></br>
  <b>Shtangat e dorës, fitnesi në shtëpi</b></br>
<?php
$myfile = fopen("fread.txt", "w") or die("Unable to open file!");
$txt="Shtangat e dorës ofrojnë një gamë të rritur lëvizje dhe shumë mbingarkimi me muskujt dhe ndihmojnë në një ndërtim një ndërtim jashtëzakonisht efektive të muskujve të gjoksit, të parakrahëve, shpatullave.";
fwrite($myfile, $txt);
fclose($myfile);
$fread = fopen('fread.txt', "r");
while(!feof($fread)) {  
  echo fgetc($fread);  
}  
fclose($fread);  
?>
  
   </br></br>
  <b> Për një trup muskuloz</b></br>
  Të rriturit mund të rrisin aktivitetin e tyre deri në 5 orë (300 minuta) çdo javë me ushtrime intesive aerobike, ose në dy ose më shumë ditë në javë në të gjitha grupet e mëdha të muskujve (të këmbëve, vitheve, shpinës, barkut, gjoksit, shpatullave dhe krahët), ose një shëtitje prej 2 orësh e 30 minuta (150 minuta) një aktivitet të moderuar intesiteti aerobik.
  
</p> 


<?php include('./views/footer.php')  ?>


</body>
</html>



