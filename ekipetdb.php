<?php

$ekipet=mysqli_connect('localhost','root','','dbajax');


if(isset($_POST['winner'])){

    $id=$_POST['id'];
    $winner= $_POST['winner'];

 $result=mysqli_query($ekipet,"UPDATE team SET winner='$winner' WHERE id='$id'");
  if($result){

    echo 'Success';
  }
}


?>