<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../lib/Libraries.php') ?>
    <title>PHANTOM</title>
  </head>
  <body>
 
<div class="container-fluid w3-teal" style="padding: 20px">
<h3 class="text-center">ADD STUDENT</h3>
</div>    
<div class="container-fluid w3-teal text-center" style="padding: 20px">
<a href="faculty.php"><button class="btn btn-warning"><h6 class="text-center">GO TO FACULTY HOME</h6></button></a>
</div>


<?php include('../lib/connection.php') ?>
<br>
<center>
<div id="sadd" class="container row">
  <div class="col-md-4"></div>

  <div class="col-md-4">
<form method="POST" action="" style="border: 1px solid #777;border-radius: 30px;padding: 40px;">
    NAME:<input class="form-control" type="text" name="name" placeholder="Please Enter a name"></input><br>
    DEPARTMENT:<input class="form-control" type="text" name="dept" placeholder="Department" value="COMPUTER"></input><br>
    ROLL NO:<input class="form-control" type="text" name="roll" placeholder="Roll No."></input><br>
    <input class="form-control btn btn-success" type="submit" name="sub" value="ADD"></input>
</form>
<?php
if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['dept']) && isset($_POST['roll'])&&!empty($_POST['roll'])&&!empty($_POST['dept'])) {

$name=$_POST['name'];
$dept=$_POST['dept'];
$roll=$_POST['roll'];

$sql2 = "INSERT INTO t1(name,dept,roll) VALUES ('$name','$dept','$roll')";
$sql3 = "INSERT INTO t2(roll) VALUES ('$roll')";
$sql4 = "INSERT INTO t3(roll) VALUES ('$roll')";
$sql5 = "INSERT INTO t4(roll) VALUES ('$roll')";
$sql6 = "INSERT INTO t5(roll) VALUES ('$roll')";
$sql7 = "INSERT INTO t6(roll) VALUES ('$roll')";
if ($conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE) {
    echo '<div class="w3-panel w3-green w3-round"><h4>Added Successfully!</h4></div>';
    header("Refresh:1");
} else {
    echo '<div class="w3-panel w3-red w3-round"><h4>Failed!</h4></div>';
    header("Refresh:3");
}

}
?><br>
<button class="btn btn-info" onclick="list()">VIEW STUDENT LIST</button>
</div>
<div class="col-md-4"></div>

</div>
</center>
<script type="text/javascript">
  function list(){
    document.getElementById('sadd').style.display="none";
    document.getElementById('slist').style.display="block";
  }
  function add(){
    document.getElementById('sadd').style.display="block";
    document.getElementById('slist').style.display="none";
  }
</script>
<div id="slist" class="container" style="display: none;"> 
<table class="table table-striped" style="padding: 0;margin: 0">
<button class="btn btn-info" onclick="add()">ADD STUDENT</button>
<h3>LIST OF STUDENTS</h3><hr>
    <thead>
      <tr>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>ROLL NO.</th>
      </tr>
    </thead>
    <tbody>
      <?php  
$sql = "SELECT * FROM t1 order by roll";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>".$row["dept"]."</td><td>".$row["roll"]."</td></tr>";
    }
} else {
    echo "<tr><td>-</td><td>-</td><td>-</td></tr><br>";
}
?>
    </tbody>
  </table>
</div>
  </body>
  </html>