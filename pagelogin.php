<?php
include 'ekipetdb.php';
?>
<?php
if(isset($_COOKIE['is_logged_in'])){

    if(isset($_COOKIE['email'])){
        echo"Welcome ".$_COOKIE['email']." ".'<a href="?action=logout">Logout</a>;';
    }   
}else{
    header("Location: login.php");
}
if(isset($_GET['action'])){
    if($_GET['action'] === "logout"){

    unset($_SESSION['email']);
    unset($_SESSION['is_logged_in']);
    session_destroy();
    
    setcookie("email",null,-1);
    setcookie("is_logged_in",null,-1);


    $fshij=mysqli_query($ekipet,"UPDATE team SET winner='?'");
  

    header("Location: indexform.php");
}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <title>EURO2020</title>
</head>
<body>
<div class="container">
<br>
<h2>Perditeso te dhenat se kush do te fitoj ne grupet e EURO2020 </h2>
<table class="table">
<thead>
<tr >
<th>Ekipi 1</th>
<th>Ekipi 2</th>
<th>Ekipi 3</th>
<th>Ekipi 4</th>
<th>Fituesi</th>
<th>Ndrysho</th>
</tr>
</thead>
<tbody>
<?php
$table=mysqli_query($ekipet,'Select * from team');
while($row =mysqli_fetch_array($table)){ ?>
<tr id="<?php echo $row['id']; ?>">
<td ><?php echo $row['team1']; ?> </td>
<td><?php echo $row['team2'];  ?></td>
<td><?php echo $row['team3'];  ?></td>
<td><?php echo $row['team4'];  ?></td>
<td data-target="winner"><?php echo $row['winner'];  ?></td>
<td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>">Qello fituesin </a></td>



</tr>


<?php }
?>

</tbody>
</table>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label> Fituesi</label>
        
        <input type="text" class="form-control" id="winner">
        <p id ="opt">   </p>
        
        
        
        
        </div>
        <input type="hidden" id="userID" class="form-control">
      </div>
      <div class="modal-footer">

      <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    
</body>
<script>

$(document).ready(function(){
    $(document).on('click','a[data-role=update]',function(){
        var id = $(this).data('id');
        var winner = $('#'+id).children('td[data-target=winner]').text();
        $('#winner').val(winner);
        $('#userID').val(id);
        $('#myModal').modal('toggle');
    });
    



$('#save').click(function(){
   
   var id = $('#userID').val();
   var winner = $('#winner').val();

    $.ajax({ 
        url      : 'ekipetdb.php',
        method   : 'post',
        data     : { id : id , winner : winner},
        success  : function(response){
                    $('#'+id).children('td[data-target=winner]').text(winner);
                    $('#myModal').modal('toggle');
                  }

    });
  });
 });
 
 $('input').keyup(function(){
   var opcionet = $('input').val();
   $.post("opcionet.php", { 
       suggestion : opcionet
       }, function(data,status){
         $('#opt').html(data);
       });

   });
 
</script>
</html>


