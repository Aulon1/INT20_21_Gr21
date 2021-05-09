<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type="text/javascript">

    $(function(){
      var val=$(".ushqimet").text();
      alert(val);
      });
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .teksti{
      height: 65vh;
    }
    .ushqimet{
      margin-top: 25px;
    }
     img{
       margin-top: 20px;
     }
     figcaption{
       margin-top: 15px;
     }
    </style>
  </head>
  <body>
  <?php include('./views/header.php')  ?>
<h1 class="ushqimet" align="center">Ushqimet për kocka të forta</h1>
<figure > 
  <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/12/Calcium-Foods-600x360.jpg"width="100%"height="500px" alt="Ushqimet me kalcium"> 
  <figcaption style="text-align: center; "><b>-Ushqimet me kalcium-</b> </figcaption>
</figure>
<div class="teksti">
<?php
  $stringu = "Kockat pavarësisht se kanë një përbërje të fortë, ato mund të preken nga sëmundje dhe dëmtime mjaft serioze. Prandaj nevoja për të qenë të kujdesshëm dhe të shëndetshëm është gjithnjë prezente.Për të pasur kocka të forta nuk ju duhet të bëni asgjë të jashtëzakonshme, mjafton të ktheni ushqimin në aleatin tuaj më të mirë.</br></br>
  Një nga mineralet që ndihmon më shumë kockat është kalciumi, të cilin për fat të mirë mund ta gjeni në shumë ushqime.Mëngjesi është vakti më i mirë pë tu ushqyre me kalcium.Vetëm një gotë qumësht përmban 300 mg kalcium të cilat mund ti merrni menjëherë në një vakt.</br></br> Megjithëse sasia e duhur e konsumimit të tij nuk është përcaktuar ende, 
  ekspertët shprehen se rreth 1.500 miligramë në ditë të konsumimit të këtij minerali janë mëse të nevojshme për organizmin.Për të arritur në masën e këshilluar 500 mg mund të shtoni edhe ndonjë produkt tjetër bulmeti në dietën tuaj. Këtu mund të futet, pak djathë, gjizë, kos apo edhe perime si brokoli dhe lakrat. Gjithashtu përveç, bulmetit kalciumin 
  mund ta përfitoni edhe nga lëngu i freskët i portokallit. Një gotë me lëng të freskët përmban 200-340 mg kalcium. Ekspertët theksojnë të mos harroni të përfshini edhe vitaminën D tek dieta juaj. Atë mund ta gjeni fare lehtë tek ushqimet të cilat janë të pasura edhe me kalcium.</br></br> Këtu futen sardelet dhe salmoni të cilat megjithëse nuk preferohen 
  të konsumohen në mëngjes, mund ti lini për dy vaktet e tjera. Pra, çdo mëngjes zgjidhni patjetër nga një gotë qumësht apo lëng portokalli, shoqëruar me ushqime të tjera bulmeti apo perime jeshile. Kështu kockat tuaja do të qëndrojnë të forta për një kohë të gjatë dhe do të shërojnë vetëveten.";
  
  echo "$stringu"."<br><br><br>";
  echo "<b>Fjala kyçe kockat është përdorur ";
  echo preg_match_all('/kockat/', $stringu);
  echo " herë në tekst."  

?>
</div>
<?php include('./views/footer.php')  ?>
</body>
</html>