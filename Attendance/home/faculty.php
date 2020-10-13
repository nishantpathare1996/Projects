<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../lib/Libraries.php') ?>
    <title>PHANTOM</title>
  </head>
  <body style="background-color: #eee;">
<div class="container-fluid w3-teal" style="padding: 20px">
<h2 class="text-center">FACULTY HOME</h2>
<h4 class="text-right"><i class="fa fa-user-circle-o" aria-hidden="true"></i> PROFESSOR: <?php session_start();echo $_SESSION["fname"] ?>&nbsp;&nbsp;<i class="fa fa-book" aria-hidden="true"></i> SUBJECT: <?php echo $_SESSION["subject"] ?> <br><br><a href="home.php"><button class="btn btn-warning"><h6 class="text-right">LOGOUT</h6></button></a></h4>
</div>


<div class="container-fluid"><center>

<div class="container row" style="margin-top: 50px;">
		<div class="col-sm-4" style="padding: 20px;">
		<div class="w3-teal" style="padding: 10px;"><h1 style="font-size:200px;"><i class="fa fa-user-plus" aria-hidden="true"></i></h1><a href="newstud.php"><button class="btn btn-warning"><h6 class="text-center">ADD NEW STUDENT</h6></button></a></div>
		</div>
		<div class="col-sm-4" style="padding: 20px;">
		<div class="w3-teal" style="padding: 10px;"><h1 style="font-size:200px;"><i class="fa fa-check-square-o" aria-hidden="true"></i></h1><a href="<?php echo $_SESSION["land"] ?>.php"><button class="btn btn-warning"><h6 class="text-center">TAKE ATTENDANCE</h6></button></a></div>
		</div>
		<div class="col-sm-4" style="padding: 20px;">
		<div class="w3-teal" style="padding: 10px;"><h1 style="font-size:200px;"><i class="fa fa-bar-chart" aria-hidden="true"></i></h1><a href="check.php"><button class="btn btn-warning"><h6 class="text-center">VIEW ATTENDANCE</h6></button></a></div>
		</div>
		</div>
</div>
</center>
</div>
</body>
</html>