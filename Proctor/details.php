<?php
/*session_start();
foreach ($_POST as $key => $value) {
 	$_SESSION['post'][$key] = $value;
 	}
 extract($_SESSION['post']);
*/
 session_start();
$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo 'db not selected';
}
$username = $_SESSION["grno"];



$grno=$_POST['grno'];
$branch=$_POST['branch'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$nickname=$_POST['nickname'];
$dob=$_POST['dob'];
$smob=$_POST['smob'];
$email=$_POST['email'];
$haddr=$_POST['haddr'];
$paddr=$_POST['paddr'];
$sibling=$_POST['sibling'];
$fname=$_POST['fname'];
$foccupation=$_POST['foccupation'];
$mname=$_POST['mname'];
$moccupation=$_POST['moccupation'];
$pemail=$_POST['pemail'];
$ssc=$_POST['ssc'];
$smedium=$_POST['smedium'];
$sboard=$_POST['sboard'];
$hsc=$_POST['hsc'];
$hmedium=$_POST['hmedium'];
$hboard=$_POST['hboard'];
$bg=$_POST['bg'];
$ht=$_POST['ht'];
$wt=$_POST['wt'];
$hp=$_POST['hp'];
$hobbies=$_POST['hobbies'];
$strengths=$_POST['strengths'];
$stgoals=$_POST['stgoals'];
$ltgoals=$_POST['ltgoals'];
$extra=$_POST['extra'];





$sql="INSERT INTO details(grno,branch,rollno,name,nickname,dob,smob,email,haddr,paddr,sibling,fname,foccupation,mname,moccupation,pemail,ssc,smedium,sboard,hsc,hmedium,hboard,bg,ht,wt,hp,hobbies,strengths,stgoals,ltgoals,extra) VALUES('$grno','$branch','$rollno','$name','$nickname','$dob','$smob','$email','$haddr','$paddr','$sibling','$fname','$foccupation','$mname','$moccupation','$pemail','$ssc','$smedium','$sboard','$hsc','$hmedium','$hboard','$bg','$ht','$wt','$hp','$hobbies','$strengths','$stgoals','$ltgoals','$extra')";

if(!mysqli_query($con,$sql)){
	echo 'registertion failed';
}

	header("refresh:1;login.php");

//unset($_SESSION['post']);
//header("refresh:2;login.php");
?>

