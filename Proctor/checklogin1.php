<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}
$fusername=$_POST['username'];
$fpassword=$_POST['password'];
$_SESSION["fusername"] = $fusername;

$sql = "SELECT * FROM checkteachers WHEre fusername='$fusername' And fpassword='$fpassword'";
$result = $con->query($sql);
if(!mysqli_query($con,$sql)){
	echo'registertion failed';
}
$count=mysqli_num_rows($result);
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword");
$_SESSION["fusername"] = $fusername; 
$_SESSION["fpassword"]=$fpassword;
header("location:login1.php");
}
else {
echo "Wrong Username or Password";
header("location:1.html");
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';}

?>

