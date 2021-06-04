<?php

$ekipet=mysqli_connect('localhost','root','','dbajax');


if(isset($_POST['winner'])){

    $id=$_POST['id'];
    $winner= $_POST['winner'];

 $result="UPDATE team SET winner='$winner' WHERE id='$id'";
 if(mysqli_query($ekipet, $result)){
   echo"success";
 }
}


?>