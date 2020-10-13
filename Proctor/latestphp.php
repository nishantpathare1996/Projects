<?php
session_start();
$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
	echo'db not selected';
}
$grno = $_SESSION["grno"];

//print_r($_SESSION);

$scode1=$_POST['scode1'];
$scode2=$_POST['scode2'];
$scode3=$_POST['scode3'];
$scode4=$_POST['scode4'];
$scode5=$_POST['scode5'];
$scode6=$_POST['scode6'];

$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$sub6=$_POST['sub6'];

$m11=$_POST['m11'];
$m12=$_POST['m12'];
$m13= $m11+ $m12;
$m14=$_POST['m14'];
$m15=$_POST['m15'];
$m16=$m14+$m15;

$m21=$_POST['m21'];
$m22=$_POST['m22'];
$m23=$m21+$m22;
$m24=$_POST['m24'];
$m25=$_POST['m25'];
$m26=$m24+$m25;

$m31=$_POST['m31'];
$m32=$_POST['m32'];
$m33=$m31+$m32;
$m34=$_POST['m34'];
$m35=$_POST['m35'];
$m36=$m34+$m35;

$m41=$_POST['m41'];
$m42=$_POST['m42'];
$m43=$m41+$m42;
$m44=$_POST['m44'];
$m45=$_POST['m45'];
$m46=$m45+$m45;

$m51=$_POST['m51'];
$m52=$_POST['m52'];
$m53=$m52+$m51;
$m54=$_POST['m54'];
$m55=$_POST['m55'];
$m56=$m54+$m55;

$m61=$_POST['m61'];
$m62=$_POST['m62'];
$m63=$m61+$m62;
$m64=$_POST['m64'];
$m65=$_POST['m65'];
$m66=$m64+$m65;
//$year=$_POST['year'];

$g11=$_POST['g11'];
$g12=$_POST['g12'];
$g13=$_POST['g13'];
$g14=$_POST['g14'];
$g15=$_POST['g15'];
$g16=$_POST['g16'];

$g21=$_POST['g21'];
$g22=$_POST['g22'];
$g23=$_POST['g23'];
$g24=$_POST['g24'];
$g25=$_POST['g25'];
$g26=$_POST['g26'];


$g31=$_POST['g31'];
$g32=$_POST['g32'];
$g33=$_POST['g33'];
$g34=$_POST['g34'];
$g35=$_POST['g35'];
$g36=$_POST['g36'];


$g41=$_POST['g41'];
$g42=$_POST['g42'];
$g43=$_POST['g43'];
$g44=$_POST['g44'];
$g45=$_POST['g45'];
$g46=$_POST['g46'];


$g51=$_POST['g51'];
$g52=$_POST['g52'];
$g53=$_POST['g53'];
$g54=$_POST['g54'];
$g55=$_POST['g55'];
$g56=$_POST['g56'];

$g61=$_POST['g61'];
$g62=$_POST['g62'];
$g63=$_POST['g63'];
$g64=$_POST['g64'];
$g65=$_POST['g65'];
$g66=$_POST['g66'];

$c13=$_POST['c13'];
$c16=$_POST['c16'];
$c23=$_POST['c23'];
$c26=$_POST['c26'];
$c33=$_POST['c33'];
$c36=$_POST['c36'];
$c43=$_POST['c43'];
$c46=$_POST['c46'];
$c53=$_POST['c53'];
$c56=$_POST['c56'];
$c63=$_POST['c63'];
$c66=$_POST['c66'];


$seatno=$_POST['seatno'];
$attempt=$_POST['attempt'];



$sql="INSERT INTO sem1(grno,scode1,sub1,m11,m12,m13,m14,m15,m16,scode2,sub2,m21,m22,m23,m24,m25,m26,scode3,sub3,m31,m32,m33,m34,m35,m36,scode4,sub4,m41,m42,m43,m44,m45,m46,scode5,sub5,m51,m52,m53,m54,m55,m56,scode6,sub6,m61,m62,m63,m64,m65,m66,seatno,attempt,g11,g12,g13,g14,g15,g16,g21,g22,g23,g24,g25,g26,g31,g32,g33,g34,g35,g36,g41,g42,g43,g44,g45,g46,g51,g52,g53,g54,g55,g56,g61,g62,g63,g64,g65,g66,c13,c16,c23,c26,c33,c36,c43,c46,c53,c56,c63,c66) VALUES ('$grno','$scode1','$sub1','$m11','$m12','$m13','$m14','$m15','$m16','$scode2','$sub2','$m21','$m22','$m23','$m24','$m25','$m26','$scode3','$sub3','$m31','$m32','$m33','$m34','$m35','$m36','$scode4','$sub4','$m41','$m42','$m43','$m44','$m45','$m46','$scode5','$sub5','$m51','$m52','$m53','$m54','$m55','$m56','$scode6','$sub6','$m61','$m62','$m63','$m64','$m65','$m66','$seatno','$attempt','$g11','$g12','$g13','$g14','$g15','$g16','$g21','$g22','$g23','$g24','$g25','$g26,','$g31','$g32','$g33','$g34','$g35','$g36','$g41','$g42','$g43','$g44','$g45','$g46','$g51','$g52','$g53','$g54','$g55','$g56','$g61','$g62','$g63','$g64','$g65','$g66','$c13','$c16','$c23','$c26','$c33','$c36','$c43','$c46','$c53','$c56','$c63','$c66')";

if(!mysqli_query($con,$sql)){
	echo'registertion failed';
}
header("refresh:10; login.php");
?>