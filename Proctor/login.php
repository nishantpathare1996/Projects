<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}

$grno=$_SESSION["grno"];
$password=$_SESSION["password"];

$sql = "SELECT name,email FROM registration WHEre gr='$grno' And password='$password'";
$result = $con->query($sql);


    // output data of each row
    $row = $result->fetch_assoc();
    echo '<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-U-A Compatible" content="IE-edge">
		<meta name="viewport" content="Width=device-width,initial-scale=1">
		<title>PROCTORit</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/proctor.css" rel="stylesheet">

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>


	<body id="menu1">

		<div id="menu" class="container-fluid">
			
			<br>
			<h1 id="heading" align="center">PROCTORit</h1>
			<br>
				
		</div>
		<nav class="navbar navbar-inverse custom">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="1.html">PROCTORit</a>
    			</div>
    				<ul class="nav navbar-nav">
				    	<li class="active"><a href="login.php">Home</a></li>
					   
				    </ul>
  			</div>
		</nav>


		<h2><script>var time = new Date().getHours();
    if (time < 10) {
        document.write("Good morning");
    } else if (time < 20) {
        document.write("Good Afternoon");
    } else {
        document.write("Good evening");
    }</script> &nbsp&nbsp&nbsp'.$row["name"].'</h2>
		<br>
		<a href="newform.html" class="btn " role="button" style="margin-left:50px;width:300px;background-color: #4717f6;color:white;">Fill the form </a>
		<a href="viewdetails.php" class="btn btn-info" role="button" style="margin-left:50px;width:300px;background-color: #4717f6;color:white;">view details </a><br><br><br>

		<div class="container-fluid">
			<div  class="col-xs-6" style="margin-left:20px;"">
			<table class = "table table-bordered">
				   <caption>COMPUTER DEPARTMENT</caption>
				   
				   <thead>
				      <tr style="background-color:#4717f6">
				         <th>Semester </th>
				         <th>view marks</th>
				         <th>marks</th>
				         
				      </tr>
				   </thead>
				   
				   <tbody>
				      <tr>
				         <td>Sem 1 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      
				      <tr>
				         <td>Sem 2</td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 3 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 4 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 5 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 6 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 7 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>
				      <tr>
				         <td>Sem 8 </td>
				         <td><a href="viewmarks.php" >view marks</a></td>
				         <td><a href="sem1.html" role="button">Enter Semester markss</a></td>
				         
				      </tr>


				      
				     
				   </tbody>
					
				</table>
				</div>
			</div>
		</html>';

   
    
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id1"]. " - Name: " . $row["name"]. " email is " . $row["email"]. "<br>";
    }

} else {
    echo "0 results";
}*/
$con->close();
?>