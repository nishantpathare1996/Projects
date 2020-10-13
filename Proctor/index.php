<?php
session_start();
if(!file_exists('users/' .$_SESSION['username']. '.xml')){
	header('Location: dblogin.php');
	die;

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.DTD">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
		<title>faculty</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="css/w3.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="css/proctor.css" rel="stylesheet">

</head>
<body style="background-color:black;color:white;">
<div class="container-fluid w3-purple" style="margin-top: -2cm;">
		<h1 class="text-center">Student Record Database</h1>
		<h2 class="text-center">welcome, <?php echo $_SESSION['username']; ?> </h2>
<h2 class="text-center"><a href="logout1.php"><button class="btn btn-danger">logout</button></a></h2>
	</div>	<br>
		<div class="container"><div class="col-md-4"></div><div class="col-md-4"> 

     <form action="" method="POST">

     <input class="form-control" type="text" name="tname" placeholder="Enter GR NO."><br>

     <input  class="btn  btn-info form-control" type="submit" name="ttt" value="CREATE">

     </form>

     </div>
     <div class="col-md-4"></div>

</div>
    <?php  

      if(isset($_POST['ttt'])){
      $y1=$_POST['tname']; 
echo '<h3 class="text-center">GR NO:'.$y1.'</h2>';

$conn=mysqli_connect('127.0.0.1','root','');
if(!$conn){
  echo 'not connected to server';
}
if(!mysqli_select_db($conn,'proctorit')){
  echo 'db not selected';
}


$sql = "SELECT sgpi
FROM sem1 where grno='".$y1."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<h3 class="text-center">SGPI:'.$row["sgpi"].'</h2>';
      }
    }
  }

      ?>

<table class="table w3-white" style="padding: 0;margin: 0">
    <thead>
      <tr>
        <th>SUBJECT</th>
        <th>ESE</th>
        <th>IA</th>
        <th>TOT</th>
        <th>PR</th>
        <th>TW</th>
        <th>TOT</th>
      </tr>
    </thead>
    <tbody>
     <br>
      <?php  

      if(isset($_POST['ttt'])){
      $y1=$_POST['tname'];
      

for ($i=1; $i <7 ; $i++){ 
$sql = "CREATE TABLE ".$y1."h".$i." as SELECT scode".$i.",sub".$i.",m".$i."1,m".$i."2,m".$i."3,m".$i."4,m".$i."5,m".$i."6
FROM sem1 where grno='".$y1."'";

if ($conn->query($sql) === TRUE) {

} //else {
     // echo "<h4>REPORT ALREADY GENERATED. PLEASE CONTACT YOUR PROCTOR!</h4>";

//}




$sql = "SELECT *
FROM ".$y1."h".$i;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["scode".$i.""]."-".$row["sub".$i.""]. "</td><td>".$row["m".$i."1"]."</td><td>".$row["m".$i."2"]."</td><td>".$row["m".$i."3"]."</td><td>".$row["m".$i."4"]."</td><td>".$row["m".$i."5"]."</td><td>".$row["m".$i."6"]."</td></tr>";
    }
} else {
    echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><br>";
} 
}
}?>
    </tbody>
  </table>

	
</body>
</html>