<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sport.css">
    <title>Sport</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--Pjesa per drag and drop -->
    <style type="text/css">
    .drag{
      width: 90%;
      margin: auto;
      
    }
              

      #div1, #div2 {
          display:inline-block;
          width: 230px;
          height: 140px;
          padding: 10px;
          border: 1px solid #aaaaaa;
          margin: auto;
          text-align: center;
         
          
      }
      </style>
      <script>
      function allowDrop(ev)
      {
          ev.preventDefault();
      }
      function drag(ev)
      {
          ev.dataTransfer.setData("Text",ev.target.id);
      }
      function drop(ev)
      {
          ev.preventDefault();
          var data=ev.dataTransfer.getData("Text");
          ev.target.appendChild(document.getElementById(data));
      }
      </script>
</style> 
    
  </head>
  <body>
  <?php include('./views/header.php')  ?>

  <div class="pjeset">
    <div class="pjesa">
      <a href="slajmi_1.php" target="_blank">
        
        <p style="font-size: 28px;font-family: Arial, Helvetica, sans-serif;"> A do të shtyhen Lojërat Olimpike në Tokio? 
          Atletët e mbarë botës i janë gëzuar këtij viti - vitit të Lojërave Olimpike, që është ngjarja më e rëndësishme e një sportisti. </p>
      </p>

      </a>
    </div>
    <div class="pjesa_1">
      <h3>Futboll</h3>
      <i class="fas fa-futbol"></i>
      <a href="https://telegrafi.com/hidhet-shorti-per-rrethin-e-katert-ne-fa-cup-derbi-mes-dy-skuadrave-te-urryera-ne-angli/" target="_blank">
      <p>Hidhet shorti për rrethin e katërt në FA Cup:<br>
        Derbi mes dy skuadrave më të urryera në Angli
        në rrethin e katërt do të ketë përballje te fortë.</p>
      </a>

  </div>
  <div class="pjesa_2">
    <h3>Tenis</h3>
    <i class="fas fa-table-tennis"></i>
    <a href="https://telegrafi.com/mes-shume-sfidash-te-krijuara-nga-covid-19-tenistet-qe-e-mbyllen-vitin-2020-si-te-paguarit-por-edhe-nga-te-te-gjitha-koherat/" target="_blank">
    <p>Mes shumë sfidash të krijuara nga COVID-19, 
      tenistët e mbyllën vitin 2020 si më të paguarit,
       e të gjitha kohërave,
       Sharapova po pensionohet nga tenisi profesionist.</p>
      </a>


  </div>
  <div class="pjesa_3">
    <h3>Basketboll</h3>
    <i class="fas fa-basketball-ball"></i>
    <a href="https://telegrafi.com/lakers-vazhdojne-fitore-oklahoma-perkujdeset-per-befasine-e-mbremjes-ne-nba/" target="_blank">
    <p>Lakers vazhdojnë me fitore, 
      Oklahoma përkujdeset për befasinë e mbrëmjes në NBA
      Los Angelos Lakers kanë marrë fitoren e dytë radhazi në NBA.</p>
    </a>

  </div>
  <div class="pjesa_4">
    <h3>Skijim</h3>
    <i class="fas fa-skiing"></i>
    <a href="https://telegrafi.com/arbi-pupovci-fiton-medaljen-e-bronzte-ne-garen-erzurum-2020/" target="_blank">
    <p>Arbi Pupovci fiton medaljen e bronztë në garën ‘Erzurum 2020’
      Skitari ynë fitoi në garën e Federatës Ndërkombëtare të Skitarisë, 
       mbajtur në Erzurum të Turqisë.</p>
      </a>

  </div>
  </div>

  <h2 id="idh2">Lajmet m&euml; t&euml; lexuara nga Sporti</h2>

        <div class="lajmet">

            <div class="lajmi_1">
              <a href="slajmi_2.php" target="_self">
                <img src="slajmi_1.jpg" alt="Fotoja pare">
               
                  <p>Kush  është  më  i  miri  në  futboll  – Maradona, Messi apo Ronaldo? Klopp jep përgjigjen e tij !</p>
                </a>
            </div>
            <div class="lajmi_2">
              <a href="slajmi_3.php " target="_self">
                <img src="slajmi_2.jpg" alt="Fotoja dyte">
               
                  <p>Tyson Fury akuzon Anthony Joshuan se ka gënjyer në taktikat për mega meçin që pritet të realizohet gjatë këtij viti.</p>
                </a>
            </div>
            <div class="lajmi_3">
              <a href="slajmi_4.php">
                <img src="slajmi_3.jpg" alt="Foto e trete">
                
                  <p>Shqiptari nga Shkupi  q&euml;  e   synon FORMULA 1 , kampion  n&euml; bot&euml;n e automobilizmit ne gar&euml;n e FORMULA 2.</p>
                </a>
                
                
            </div>
            <div class="lajmi_4">
              <a href="slajmi_5.php" >
                <img src="slajmi_4.jpg" alt="Fotoja e kater">
                
                  <p>&Ccedil;iklizmi apo ecja? <br>Cilën duhet ta preferoni më shumë?<br>&Ccedil;farë ndodh nëse e përdorni shumë rrallë një makinë?</p>
                </a>
                
            </div>
          </div>
        </div>
  

        <h2 id="idh2">Tabela</h2>

        <div class="tabelat">
            <div class="tabela_1">
               <table style="width: 100% ;height: 100%; border-collapse: collapse;">
                <tr>
                    <th colspan="6">Champion League </th>
                   
                  </tr>
                  <tr >
                      <td colspan="3"></td>
                      <td style="opacity: 0.7;">P</td>
                      <td style="opacity: 0.7;">+/-</td>
                      <td>Pts</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><img src="bayern.png" width="30" height="30"></td>
                    <td>B.Munich</td>
                    <td style="opacity: 0.7;">8</td>
                    <td style="opacity: 0.7;">13</td>
                    <td>24</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="rmadrid.png" width="30" height="30"></td>
                    <td>Real Madrid</td>
                    <td style="opacity: 0.7;">8</td>
                    <td style="opacity: 0.7;">11</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="mcity.png" width="30" height="30"></td>
                    <td>Man City</td>
                    <td style="opacity: 0.7;">8</td>
                    <td style="opacity: 0.7">12</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="liverpool.png" width="30" height="30"></td>
                    <td>Liverpool</td>
                    <td style="opacity: 0.7;">8</td>
                    <td style="opacity: 0.7;">6</td>
                    <td>19</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="juve.png" width="30" height="30"></td>
                    <td>Juventus</td>
                    <td style="opacity: 0.7;">8</td>
                    <td style="opacity: 0.7;">7</td>
                    <td>19</td>
                  </tr>
               
               </table>
            </div>
            <div class="tabela_2">
                <table style="width: 100% ;height: 100%; border-collapse: collapse;">
                    <tr>
                        <th colspan="6">Premier League</th>
                        
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                        <td style="opacity: 0.7;">P</td>
                        <td style="opacity: 0.7;">+/-</td>
                        <td>Pts</td>
                    </tr>
                      <tr>
                        <td>1</td>
                        <td><img src="munited.png" width="30" height="30"></td>
                        <td>Man Utd</td>
                        <td style="opacity: 0.7;">17</td>
                        <td style="opacity:0.7;">10</td>
                        <td>36</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><img src="liverpool.png" width="30" height="30"></td>
                        <td>Liverpool</td>
                        <td style="opacity: 0.7;">17</td>
                        <td style="opacity: 0.7;">16</td>
                        <td>33</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><img src="mcity.png" width="30" height="30"></td>
                        <td>Man City</td>
                        <td style="opacity: 0.7;">16</td>
                        <td style="opacity: 0.7;">12</td>
                        <td>32</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><img src="chelsea.png" width="30" height="30"></td>
                        <td>Chelsea</td>
                        <td style="opacity: 0.7;">17</td>
                        <td style="opacity: 0.7;">10</td>
                        <td>32</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><img src="arsenal.png" width="30" height="30"></td>
                        <td>Arsenal</td>
                        <td style="opacity: 0.7;">17</td>
                        <td style="opacity: 0.7;">7</td>
                        <td>32</td>
                      
    
                   </table>    
            </div>
            <div class="tabela_3">
               <table style="width: 100% ;height: 100%;border-collapse: collapse ;">
                <tr>
                    <th colspan="6">La Liga</th>
                    
                  </tr>
                  <tr>
                      <td colspan="3"></td>
                      <td style="opacity: 0.7;">P</td>
                      <td style="opacity: 0.7;">+/-</td>
                      <td>Pts</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><img src="amadrid.png" width="30" height="30"></td>
                    <td>Atl Madrid</td>
                    <td style="opacity: 0.7;">17</td>
                    <td style="opacity: 0.7;">20</td>
                    <td>41</td>
                    
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="rmadrid.png" width="30" height="30"></td>
                    <td>Real Madrid</td>
                    <td style="opacity: 0.7;">18</td>
                    <td style="opacity: 0.7;">19</td>
                    <td>37</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="barca.png" width="30" height="30"></td>
                    <td>Barcelona</td>
                    <td style="opacity: 0.7;">18</td>
                    <td style="opacity: 0.7;">15</td>
                    <td>34</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="vilareal.png" width="30" height="30"></td>
                    <td>Vila Real</td>
                    <td style="opacity: 0.7;">18</td>
                    <td style="opacity: 0.7;">10</td>
                    <td>32</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="sevila.png" width="30" height="30"></td>
                    <td>Sevila</td>
                    <td style="opacity: 0.7;">17</td>
                    <td style="opacity: 0.7;">7</td>
                    <td>30</td>
                  </tr>
                 


               </table>
            </div>
            <div class="tabela_4">
              <table style="width: 100% ;height: 100%; border-collapse: collapse;">
                <tr>
                    <th colspan="6">Serie A</th>
                  </tr>
                  <tr>
                      <td colspan="3"></td>
                      <td style="opacity: 0.7;">P</td>
                      <td style="opacity: 0.7;">+/-</td>
                      <td>Pts</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><img src="juve.png" width="30" height="30"></td>
                    <td>Juventus</td>
                    <td style="opacity: 0.7;">17</td>
                    <td style="opacity: 0.7;">16</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="inter.png" width="30" height="30"></td>
                    <td>Inter</td>
                    <td style="opacity: 0.7;">17</td>
                    <td style="opacity: 0.7;">14</td>
                    <td>37</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="roma.png" width="30" height="30"></td>
                    <td>Roma</td>
                    <td style="opacity: 0.7;">17</td>
                    <td style="opacity: 0.7;">10</td>
                    <td>34</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="napoli.png" width="30" height="30"></td>
                    <td>Napoli</td>
                    <td style="opacity: 0.7;">16</td>
                    <td style="opacity: 0.7;">12</td>
                    <td>33</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><img src="lazio.png" width="30" height="30"></td>
                    <td>Lazio</td>
                    <td style="opacity: 0.7;">16</td>
                    <td style="opacity: 0.7;">9</td>
                    <td>31</td>
                  </tr>
                  
               </table>
               <br><br>
            </div>
            </div><br>

            <div class="drag">
           <!--   <p>Zhvendose(drag and drop) foton</p> -->
               <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
               <img id="drag1" src="rmadrid.png" draggable="true" ondragstart="drag(event)" width="174" height="129">
               <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
               </div>
           
           </div><br>






        

           <?php include('./views/footer.php')  ?>
</body>
</html>
