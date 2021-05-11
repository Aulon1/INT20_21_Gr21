<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    .tekst{
        height: 83vh;
        margin-top: 20px;
    }
    h1{
      margin-top: 25px;
    }
    img{
      margin-top: 30px;
    }
    figcaption{
      margin-top: 30px;
    }

   </style>

  </head>
  <body>
  <?php include('./views/header.php')  ?>
<h1 align="center">Dhjami i tepert</h1>
<figure > 
  <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/12/5-Exercises-That-Completely-Melt-Back-Fat-1-600x360.png" width="100%" height="300px" alt="Ushqimet me kalcium"> 
  <figcaption style="text-align: center; "><b>-Dhjami në regjioni i belit-</b> </figcaption>
</figure>
<div class="tekst">
  <?php
$stringu = "Një nga këshillat dhe rekomandimet, që dëgjohen shpesh është humbja e kilogramëve dhe dhjamit të tepërt të akumuluar në zonën e belit. Sipas mjekëve rreziku i dhjamit në këtë zonë shkon përtej paraqitjes së jashtme. Ata shprehen se dhjami i akumuluar në zonën e belit dhe përreth organeve të brendshme është më i rrezikshmi nga të gjithë.
Zonat e trupit ku dhjami akumulohet më shumë janë:</br></br>

Ijet dhe kofshët</br>
Akumulimi i dhjamit në këto zona i jep trupit formën e dardhës. Në këtë rast akumulimi i dhjamit është krejt sipërfaqësor dhe qëndron nën lëkurë.</br></br>
Zona e belit</br>
  Akumulimi i dhjamit në zonën e belit është pjesërisht nën lëkurë. Megjithatë, ai mund të shkojë më thellë duke rrethuar organet e brendshme. Trupi i njerëzve që shëndoshen kryesisht në zonën e barkut ka formën e mollës.Edhe nëse njerëzit kanë një indeks të shëndetshëm të masës trupore, dhjamosja e zonës së belit rrit nivelin e sheqerit në gjak, tensionin e lartë dhe kolesterolin. Për më tepër, sipas të dhënave një gjë e tillë kontribuon në dhjamosjen e mëlçisë dhe shfaqjen e inflamacionit. Të gjitha këto probleme mund të nxisin sëmundjet e zemrës, mëlçisë apo diabetin.</br></br>
  Një regjim i shëndetshëm ushqimor është faktori kryesor në arritjen e këtij qëllimi. Ju duhet të tregoheni të kujdesshëm me racionet dhe të jeni të vëmendshëm ndaj sasisë.
  Sipas informacioneve ju duhet të konsumoni më shumë perime, drithëra të plota, fruta dhe arrorë. Peshku dhe produktet e bulmetit me pak yndyrë janë gjithashtu të rëndësishme.
  Nga ana tjetër, ju duhet të minimizoni pijet e gazuara, yndyrnat si gjalpi etj, si edhe alkolin. Aktiviteti fizik është gjithashtu i rëndësishëm për të ngushtuar perimetrin e belit, por ai rrit edhe masën muskulare dhe përmirëson paraqitjen e jashtme të trupit.</br>
  Lëngu i majdanozit me limon e mjaltë për rënien në peshë ka efekt shumë të mirë.
  Çdo mëngjes duhet të pini esëll lëngun e një tufe majdanozi të përzier me lëngun e një gjysme limoni dhe mjaltë. Kjo kurë duhet ndjekur me përpikmëri çdo mëngjes për 5 ditë dhe më pas sërish pas një pushimi 10 ditor. Majdanozi dhe lëngu i limonit ndihmojnë për tretjen dhe oksidimin e yndyrës. Mund t’i shtoni edhe gjethe menteje për shije.";
  
echo str_replace("zonën","pjesën",$stringu)."<br>";
echo "<b>Fjala kyçe dhjami është përdorur ";
echo preg_match_all('/dhjami/', $stringu);
echo " herë në tekst."
?>
</div>
<?php include('./views/footer.php')  ?>

</body>
</html>