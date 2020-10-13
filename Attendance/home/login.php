<html>
<!doctype html>
	<head>
		<?php include('../lib/Libraries.php') ?>
	</head>
	<body>
	<div class="container-fluid w3-teal" style="padding: 20px">
<h2 class="text-center">FACULTY LOGIN</h2>
</div>
<center><div class="container row" style="padding-top: 50px;">
<div class="panel-heading col-sm-4"></div>
	<div class="panel-heading col-sm-4">
								
									<div class="col-xs-12">
										<form id="login-form" action="checklogin.php" method="post" role="form" style="display: block;">
												<div class="form-group">
													<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
												</div>
												<div class="form-group">
													<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
												</div>
											
												<div class="form-group">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
														</div>
													</div>
												</div>

							
										</form>

									</div>
									
							</div><div class="panel-heading col-sm-4"></div>
							</div></center>
							</body>
	</html>