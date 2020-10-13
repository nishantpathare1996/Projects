<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}

$fusername=$_SESSION["fusername"];
$fpassword=$_SESSION["fpassword"];

$sql ="SELECT * FROM checkteachers WHEre fusername='$fusername' And fpassword='$fpassword'";
$result = $con->query($sql);
$row = $result->fetch_assoc();


    // output data of each row
    
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
              <li class="active"><a href="login1.php">Home</a></li>
             
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
    }</script> &nbsp&nbsp&nbsp'.$fusername.'</h2>
		<br>
	<script>

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","login2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<a class="btn btn-success form-control" href="index.php" style="width:200px;">Generate Report</a><br><br/>
<form>
<select class="form-control" name="users" onchange="showUser(this.value)"">
  <option value="">Select a student:</option>
  <option value="123">Nishant Pathare</option>
  <option value="2">Pittu</option>
  <option value="3">rc</option>
  
  </select>
</form>
<br>
<div id="txtHint"><b>Student  info will be listed here...</b></div>

</body>
</html>';


$con->close();
?>