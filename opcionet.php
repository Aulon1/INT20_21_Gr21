<?php
$ekipet1= array('Italy','Switzerland','Turkey','Wales',
'Belgium', 'Russia', 'Denmark',' Finland',
'Ukraine',' Netherlands', 'Austria',' North Macedonia',
'England',' Croatia', 'Czech Republic', 'Scotland',
'Spain', 'Poland', 'Sweden ','Slovakia',
'Germany', 'France', 'Portugal',' Hungary');
if(isset($_POST['suggestion'])) {
$ekipi=$_POST['suggestion'];
if(!empty($ekipi)){
    
    foreach($ekipet1 as $ekipi1){
    if(strpos($ekipi1,$ekipi) !==false){ 
       echo "$ekipi1";
       echo"<br>";
     }
    }
  }
}



 


?>