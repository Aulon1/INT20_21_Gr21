<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="card text-center" style="padding:15px;">
</div><br><br> 

<div class="container">
  <h2>View Records
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h2>
    <table class="table table-hover">
      <thead class="bg-dark" style="color:white">
        <tr>
          <th>Id</th>
          <th>Titulli</th>
          <th>Data</th>

          <th></th>
        </tr>
      </thead>
    <tbody>
      <?php 
      // Include database file
      include 'customers.php';

      $customerObj = new Customers();
      $customers = $customerObj->displayData(); 

      foreach ($customers as $customer) {
       
      ?>
        <tr>
          <td><?php echo $customer['id']; ?></td>
          <td><?php echo $customer['titulli']; ?></td>
          <td><?php echo $customer['create_at']; ?></td>
          <td>
            <a href="edit.php?editId=<?php echo $customer['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?deleteId=<?php echo $customer['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>