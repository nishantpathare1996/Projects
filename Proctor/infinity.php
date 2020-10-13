<?php

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}
$name=$_POST['name'];
$gr=$_POST['gr'];
$email=$_POST['email'];
$pw=$_POST['password'];
//$cpw=$_POST['confirm-password'];


$sql="INSERT INTO registration(name,gr,email,password) VALUES('$name','$gr','$email','$pw')";

if(!mysqli_query($con,$sql)){
	echo 'registertion failed';
}

header("refresh:1;1.html")
?>

