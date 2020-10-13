<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../lib/Libraries.php') ?>
    <title>PHANTOM</title>
  </head>
  <body>
    
<div class="container-fluid w3-teal" style="padding: 20px">
<h3 class="text-center">ATTENDANCE</h3>
</div>

<?php include('../lib/connection.php') ?>


<div id="slist" class="container"> 

<?php 
session_start();
if(isset($_POST['present'])){
	$roll=$_SESSION['roll'];

$sql3 = "SELECT * from t4 WHERE roll=".$roll;
$result = $conn->query($sql3);
$row = $result->fetch_assoc();
$present=++$row['present'];
$total=++$row['total'];
$percentage=($present*100)/$total;


	$sql2 = "UPDATE t4 SET present='.$present.' ,total='.$total.',percentage='.$percentage.' WHERE roll=".$roll;

if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
$sql4 = "UPDATE t6 SET percentage2='.$percentage.' WHERE roll=".$roll;

if ($conn->query($sql4) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}

	$offset=$_SESSION['offset'];
	$sql = "SELECT * FROM t1 order by roll LIMIT 1 OFFSET ".$offset;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h4>ROLL NO</h4><h1 style=\"font-size:200px;\">".$row['roll']."</h1><hr><h4>".$row['name']."</h4><form action=\"\" method=\"POST\"><input class=\"btn btn-success\" type=\"submit\" name=\"present\" value=\"PRESENT\">
<input class=\"btn btn-danger\" type=\"submit\" name=\"absent\" value=\"ABSENT\"></form></div><div class=\"col-md-4\"></div></div></center>";

	$_SESSION['offset'] = ++$offset;
	$_SESSION['roll'] = $row['roll'];
    }
} else {
    echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h1 style=\"font-size:100px;\">DONE!</h1><a href=\"faculty.php\"><button class=\"btn btn-info\"><h6 class=\"text-center\">GO TO HOME</h6></button></a></div><div class=\"col-md-4\"></div></div></center>";
}
}


elseif(isset($_POST['absent'])){
	$roll=$_SESSION['roll'];

$sql3 = "SELECT * from t4 WHERE roll=".$roll;
$result = $conn->query($sql3);
$row = $result->fetch_assoc();
$absent=++$row['absent'];
$total=++$row['total'];
$present=$row['present'];
if($present!=0){
$percentage=($present*100)/$total;}
else{$percentage=0;}

	$sql2 = "UPDATE t4 SET absent='.$absent.' ,total='.$total.',percentage='.$percentage.' WHERE roll=".$roll;

if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
$sql4 = "UPDATE t6 SET percentage2='.$percentage.' WHERE roll=".$roll;

if ($conn->query($sql4) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}
	$offset=$_SESSION['offset'];
	$sql = "SELECT * FROM t1 order by roll LIMIT 1 OFFSET ".$offset;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h4>ROLL NO</h4><h1 style=\"font-size:200px;\">".$row['roll']."</h1><hr><h4>".$row['name']."</h4><form action=\"\" method=\"POST\"><input class=\"btn btn-success\" type=\"submit\" name=\"present\" value=\"PRESENT\">
<input class=\"btn btn-danger\" type=\"submit\" name=\"absent\" value=\"ABSENT\"></form></div><div class=\"col-md-4\"></div></div></center>";

	$_SESSION['offset'] = ++$offset;
	$_SESSION['roll'] = $row['roll'];
    }
} else {
    echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h1 style=\"font-size:100px;\">DONE!</h1><a href=\"faculty.php\"><button class=\"btn btn-info\"><h6 class=\"text-center\">GO TO HOME</h6></button></a></div><div class=\"col-md-4\"></div></div></center>";
}
}


else{
	$offset=0;
	$sql = "SELECT * FROM t1 order by roll LIMIT 1 OFFSET ".$offset;
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h3>ROLL NO</h3><h1 style=\"font-size:200px;\">".$row['roll']."</h1><hr><h4>".$row['name']."</h4><form action=\"\" method=\"POST\"><input class=\"btn btn-success\" type=\"submit\" name=\"present\" value=\"PRESENT\">
<input class=\"btn btn-danger\" type=\"submit\" name=\"absent\" value=\"ABSENT\"></form></div><div class=\"col-md-4\"></div></div></center>";
	$_SESSION['offset'] = ++$offset;
	$_SESSION['roll'] = $row['roll'];
    }
} else {
    echo "<center><div class=container><div class=\"col-md-4\"></div><div class=\"col-md-4\"><h1 style=\"font-size:100px;\">DONE!</h1><a href=\"faculty.php\"><button class=\"btn btn-info\"><h6 class=\"text-center\">GO TO HOME</h6></button></a></div><div class=\"col-md-4\"></div></div></center>";
}
}
     ?>

</div>



</body></html>