<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .tekst{
        height: 70vh;
        margin-top: 20px;
      }
      h1{
        margin-top: 25px;

      }
      img{
        margin-top: 30px;
      }
      figcaption{
        margin-top: 25px;
      }
     </style> 


  </head>
  <body>
  <?php include('./views/header.php')  ?>
<h1 align="center">Ndikimi i sheqerit në imunitet</h1>
<figure > 
  <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/12/Bitter-sweet-revelations-Pakistan-sugar-millers-deny-corruption-findings-as-accusations-fly_wrbm_large-1-600x360.jpg"
  width="100%"height="500px" alt="Ushqimet me kalcium"> 
  <figcaption style="text-align: center; "><b>-Sheqeri-</b> </figcaption>
</figure>
<div class="tekst">
<?php

$stringu = "Sheqeri mund të ketë ndikim ngushëllues në momente stresuese por ky ndikim është afatshkurtër dhe mund të krijojë varësi.</br>
Studimet të cilave u referohet Agroweb thonë se pas konsumit të vazhdueshëm të sheqerit, në tru aktivizohet modaliteti, që pengon sekretimin normal të dopaminës, por pritjes së variantit kimik të saj që vjen nga një substancë stimuluese, siç është sheqeri, alkoli apo droga.Me kalimin e kohës, truri krijon varësi ndaj burimeve të jashtme të dopaminës ama përjeton një stres të fortë ushqimor. Mesazhi i shpërblesës në tru është veçse ‘Kali i Trojës’ për përhapjen e inflamacionit në tru dhe çrregullimeve në nivelin e sheqerit në gjak. Qendra Amerikane për Kontrollin dhe Parandalimin e Sëmundjeve thotë se konsumi i sheqerit duhet të jetë sa më i pakët, sepse ai kontribuon në shumë probleme shëndetësore që rrisin predispozitën e përkeqësimit të simptomave të COVID-19.</br>
Ekspertët paralajmërojnë se të rriturit e çdo moshe që kanë sëmundje shoqëruese ose të fshehura janë më të rrezikuar nga koronavirusi. Ata janë më të predispozuar jo vetëm të kenë nevojë për ndihmë spitalore apo për intubim por edhe të humbin jetën.";
echo "$stringu"."<br><br>";
echo "Sëmundjet që lidhen direkt me mënyrën si ushqehemi e që rrisin rrezikun e komplikacioneve prej COVID-19 janë: <br>";
$stringu1 = "
<b>Sëmundje të zemrës</b>, 
<b>Mbipesha dhe obeziteti</b>,
<b>Diabeti mellitus (DM tip 2)</b>";
$result1 = preg_split('/\,\s{1}/',$stringu1);
$result2 = explode(",",$stringu1);
if($result1!=$result2){
echo implode(",<br>",$result1);
}
echo "<br>";
echo "<br>";
echo "<b>Fjala kyçe sheqeri është përdorur ";
echo preg_match_all('/sheqeri/', $stringu);
echo " herë në tekst."  

?>
</div>
<?php include('./views/footer.php')  ?>
</body>
</html>