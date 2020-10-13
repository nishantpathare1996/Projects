<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}
$grno=$_POST['username'];
$password=$_POST['password'];
$_SESSION["grno"] = $grno;

$sql = "SELECT name,email FROM registration WHEre gr='$grno' And password='$password'";
$result = $con->query($sql);
$count=mysqli_num_rows($result);
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
$_SESSION["grno"] = $grno; 
$_SESSION["password"]=$password;
header("location:login.php");
}
else {
echo "Wrong Username or Password";
header("location:1.html");
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';}

?>

