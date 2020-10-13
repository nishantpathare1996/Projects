<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../lib/Libraries.php') ?>
    <title>PHANTOM</title>
  </head>
  <body>
 
<div class="container-fluid w3-teal" style="padding: 20px">
<h3 class="text-center">CHECK ATTENDACE FOR STUDENT<br><br><a href="home.php"><button class="btn btn-warning"><h6 class="text-center">GO TO HOME</h6></button></a></h3>

</div>   

<?php include('../lib/connection.php') ?>
<br>
<div class="container">
<div class="col-md-4"></div>
<div class="col-md-4"><form action="" method="POST">
  <input class="form-control" type="number" name="roll" placeholder="Enter Your ROLL NO."><br>
  <input class="form-control btn btn-success" type="submit" name="getinfo">
</form></div>
<div class="col-md-4"></div>
</div>
<div id="slist" class="container"> 
<table class="table table-striped" style="padding: 0;margin: 0">
<hr>
    <thead>
      <tr>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>ROLL NO.</th>
        <th>SPCC</th>
        <th>SE</th>
        <th>MCC</th>
        <th>DD</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($_POST['getinfo'])){ 
      $roll=$_POST['roll'];
$sql = "SELECT t1.* , t6.*
FROM t1 JOIN t6 ON t6.roll = t1.roll 
where t1.roll=".$roll;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $totpercentage=($row["percentage"]+$row["percentage1"]+$row["percentage2"]+$row["percentage3"])/4;
        echo "<tr><td>" . $row["name"]. "</td><td>".$row["dept"]."</td><td>".$row["roll"]."</td><td>".$row["percentage"]."</td><td>".$row["percentage1"]."</td><td>".$row["percentage2"]."</td><td>".$row["percentage3"]."</td><td>".$totpercentage."</td></tr>";
    }
} else {
    echo "<tr><td>-</td><td>-</td><td>-</td></tr><br>";
}} ?>
    </tbody>
  </table>
</div>
  </body>
  </html>