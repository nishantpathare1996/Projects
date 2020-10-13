<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../lib/Libraries.php') ?>
    <title>PHANTOM</title>
  </head>
  <body>
 
<div class="container-fluid w3-teal" style="padding: 20px">
<h3 class="text-center">ATTENDANCE TABLE</h3>
<a href="faculty.php"><button class="btn btn-warning"><h6 class="text-center">GO TO FACULTY HOME</h6></button></a>
</div>   

<?php include('../lib/connection.php') ?>
<br>
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
$sql = "SELECT t1.* , t6.*
FROM t1 JOIN t6 ON t6.roll = t1.roll 
order by t1.roll";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $totpercentage=($row["percentage"]+$row["percentage1"]+$row["percentage2"]+$row["percentage3"])/4;
        echo "<tr><td>" . $row["name"]. "</td><td>".$row["dept"]."</td><td>".$row["roll"]."</td><td>".$row["percentage"]."</td><td>".$row["percentage1"]."</td><td>".$row["percentage2"]."</td><td>".$row["percentage3"]."</td><td>".$totpercentage."</td></tr>";
    }
} else {
    echo "<tr><td>-</td><td>-</td><td>-</td></tr><br>";
} ?>
    </tbody>
  </table>
</div>
  </body>
  </html>