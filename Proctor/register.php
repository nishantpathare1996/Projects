<?php

$errors = array();
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];

			if(file_exists('users/' .$username. '.xml')){
				$errors[] = 'Username already exists';
			}

			if($username == ''){
				$errors[] = 'username is blank';
			}

			if($email == ''){
				$errors[] = 'Email is blank';
			}

			if($password == '' || $c_password == ''){
				$errors[] = 'password are blank';
			}

			if($password != $c_password){
				$errors[] = 'password do not match';
			}

			if(count($errors) == 0){
				$xml = new SimpleXMLElement('<user></user>');
				$xml->addChild('password',md5($password));
				$xml->addChild('email',$email);
				$xml->asXML('users/' .$username. '.xml');
				header('Location: dblogin.php');
				die;
			}

	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.DTD">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
		<title>Register</title>
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
			<br><br>
				
		</div>
		<nav class="navbar navbar-inverse custom">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="1.html">PROCTORit</a>
    			</div>
    				<ul class="nav navbar-nav">
				    	<li class="active"><a href="1.html">Home</a></li>
					    
				    </ul>
  			</div>
		</nav>
	<div class="container" style="border: solid;padding: 20px;">
			<form action="" class="form-horizontal"  id=""  method="post" role="form">


		<?php
		if(count($errors) > 0){
			echo '<ul>';
			foreach($errors as $e){
				echo '<li>' .$e. '</li>';
			}
			echo'</ul>';
		}
		?>
			<div class="form-group">
				    <label class="control-label col-xs-2" for="username">Username:</label>
				    	<div class="col-xs-7">
							<input type="text" name="username" id="username"  tabindex="1" class="form-control" placeholder="ENter username here" size="20" value="" >				   		
						</div>
				</div>
			<div class="form-group">
				    <label class="control-label col-xs-2" for="email">Email:</label>
				    	<div class="col-xs-7">
							<input type="text"  name="email" id="email" tabindex="1" class="form-control" placeholder="ENter email here" size="20" value="" >				   		
						</div>
				</div>
			<div class="form-group">
				    <label class="control-label col-xs-2" for="password">Password:</label>
				    	<div class="col-xs-7">
							<input type="text" type="password" name="password" id="email" tabindex="1" class="form-control" placeholder="ENter password" size="20" value="" >				   		
						</div>
				</div>
			<div class="form-group">
				    <label class="control-label col-xs-2" for="c_password">Confirm Password:</label>
				    	<div class="col-xs-7">
							<input type="text" type="password" name="c_password" id="email" tabindex="1" class="form-control" placeholder="reenter password" size="20" value="" >				   		
						</div>
				</div>


						<center><p><input class="btn btn-success" type="submit" name="login" value="Login" /></p></center>
		</form>
		<center><a href="dblogin.php"><button class="btn btn-danger">Cancel</button></a></center>
</div><div class="col-md-4"></div>
</div>



		
			

	
</body>
</html>