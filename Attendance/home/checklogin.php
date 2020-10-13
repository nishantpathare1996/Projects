<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'student')){
	echo 'db not selected';
}
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "SELECT * FROM checklogin WHEre username='$username' And password='$password'";
$result = $con->query($sql);
$count=mysqli_num_rows($result);
$row = $result->fetch_assoc();
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
$_SESSION["fname"] = $row['fname'];
$_SESSION["subject"] = $row['subject']; 
$_SESSION["land"] = $row['land'];
header("location:faculty.php");
}
else {
echo "Wrong Username or Password";
header("location:login.html");
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';}

?>
