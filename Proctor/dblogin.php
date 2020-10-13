<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/','', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' .$username. '.xml')){
		$xml = new SimpleXMLElement('users/' .$username. '.xml', 0 , true);
		if ($password == $xml->password) {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['fpassword']=$password;
			$_SESSION['fusername']=$username;
			header('Location: login1.php');
			die;
		}

	}
	$error = true;
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.DTD">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
		<title>Login</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="css/w3.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/proctor.css" rel="stylesheet">

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
				    	<li class="active"><a href="1.html">Home</a></li>
					    <li><a href="about.html">About</a></li>
					   
					    
				    </ul>
  			</div>
		</nav>	
<div class="container" style="margin-top: 40px;"><div class="col-md-4"></div><div class="col-md-4 w3-black" style="padding: 30px;border-radius: 30px;border:solid;"><h1 class="text-center">Sign In</h1><br><form method="post" action="">
			<p>Username<input class="form-control" type="text" name="username" size="20" /></p>
			<p>Password<input class="form-control" type="password" name="password" size="20" /></p>

			<?php
			if($error){
				echo '<p>Invalid username password</p>';
			}
			?>

			<center><p><input class="btn btn-success" type="submit" value="Login" name="login" /></p>
			</center>
		</form><center><a href="register.php"><button class="btn btn-warning">Register</button></a></center>
		<br>
		</div><div class="col-md-4"></div>
</div>




		

			

	
</body>
</html>