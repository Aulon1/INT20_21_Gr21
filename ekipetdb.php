<?php

$ekipet=mysqli_connect('localhost','root','','dbajax');


if(isset($_POST['winner'])){

    $id=$_POST['id'];
    $winner= $_POST['winner'];

 $result="UPDATE team SET winner='$winner' WHERE id=?";

  if($statement = mysqli_prepare($ekipet,$result)){

    mysqli_stmt_bindm($statement,'i',$id);
    mysqli_stmt_execute($statement);
  }
}


?>