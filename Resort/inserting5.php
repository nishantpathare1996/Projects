<?php

$con=mysqli_connect('127.0.0.1','root','');

if(!$con)
	{
	echo 'not connected to server';
	}
if(!mysqli_select_db($con,'sanidhya3'))
	{
		echo 'db not selected';
	}

$fname=$_POST['firstname'];
$mob=$_POST['number'];
$alt=$_POST['numbers'];
$email=$_POST['email'];
$address=$_POST['city'];
$country=$_POST['country'];
$ppl=$_POST['person'];
$rooms=$_POST['room'];
$type=$_POST['troom'];
$kids=$_POST['kido'];


$sql= "INSERT INTO users(first_name,mob_number,alt_number,email,address,country,people,rooms,type,kids) VALUES('$fname','$mob','$alt','$email','$address','$country','$ppl','$rooms','$type','$kids')";

if(!mysqli_query($con,$sql))
{
	header("refresh:5;form.htm");
	echo '<html>
<head>
	<title>SANNIDHYA TOUR-6</title>

<style type="text/css">
		font#quo{
			text-shadow: 4px 4px 4px #555;
			animation: fade 3s ease-in 1;
			animation-direction: alternate;
		}
		button{
			align-content: center;
			background-color: #fff;
			color: #fff;
			border: none;
			border-radius: 100px;
			padding: 15%;
			opacity: 0.9;
			box-shadow: 5px 5px 5px #444;
		}
		button:hover{
			background-color: #eee;
			box-shadow: 2px 2px 2px #444;
		}
		div#quo{
			margin-top: 10%;
			background-color: #fff;
			padding: 2%;
			border: 5px dashed black;
			box-shadow: 0px 5px 10px #444; 
			animation: example 5s ease-in infinite;
			animation-direction: alternate;
			animation: fade 2s linear 1;
		}
		div#button{
			position: absolute;
			bottom: 30px;
			align-content: center;
			padding-left: 42%;
			align-self: center;
			animation: fade 2s ease-in 1;
		}
		i:hover{
			color: #eee;
			text-shadow: 2px 2px 2px #555;
		}

		@keyframes example {
    0%   {background-color: #1c0;box-shadow: 7px 7px 7px #555}
    25%  {background-color: #1d0;box-shadow: 8px 8px 8px #555}
    50%  {background-color: #1f0;box-shadow: 9px 9px 9px #555}
    100% {background-color: #1f0;box-shadow: 10px 10px 10px #555}
}

@keyframes example1 {
    0%   {text-shadow: 7px 7px 7px #555}
    25%  {text-shadow: 7.5px 7.5px 7.5px #444}
    50%  {text-shadow: 8px 8px 8px #444}
    100% {text-shadow: 8.5px 8.5px 8.5px #444}
}

@keyframes fade{
	0%{opacity: 0}
	25%{opacity: 0.25}
	50%{opacity: 0.5}
	75%{opacity: 0.75}
	100%{opacity: 1}
}

</style>

<link rel="icon" type="image/jpeg" href="iconia.jpg" />
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">


</head>
<body bgcolor="darkbrown">

<div id="quo">
<font id="quo" face="Century Gothic" size="5px" color="darkbrown"><i class="fa fa-frown-o" aria-hidden="true"></i>

OOPSSS!!</font><br>
 <font id="quo" face="Century Gothic" size="6px" color="darkbrown">
 WE HAVE <font id="quo" face="Century Gothic" size="7px" color="darkbrown">LITTLE PROBLEM HERE! <i class="fa fa-exclamation-circle" aria-hidden="true"></i>

</font>
<br></font><br><br>
<font id="quo" face="Century Gothic" size="5px" color="darkbrown">Sorry For Your Inconvenience!<br>
You\'ll be redirected to REGISTRATION FORM in about 3 secs <i class="fa fa-clock-o" aria-hidden="true"></i>
. If not, click <a href="form.htm"><font id="quo" face="Century Gothic" size="5px" color="darkbrown">here</font></a> or BELOW BUTTON.
</font>

<center><br>

<div id="button">
<a href="resort2.htm"><button><font face="Century Gothic" size="3px" color="darkbrown"><b>REGISTRATION</b></font></button></a>
</div>


</body>
</html>';
}

else
{
header("refresh:10;resort2.htm");
echo '<html>
<head>
	<title>SANNIDHYA TOUR-6</title>

<style type="text/css">
		font#quo{
			text-shadow: 4px 4px 4px #555;
			animation: fade 3s ease-in 1;
			animation-direction: alternate;
		}
		button{
			align-content: center;
			background-color: #fff;
			color: #fff;
			border: none;
			border-radius: 100px;
			padding: 15%;
			opacity: 0.9;
			box-shadow: 5px 5px 5px #444;
		}
		button:hover{
			background-color: #eee;
			box-shadow: 2px 2px 2px #444;
		}
		div#quo{
			margin-top: 10%;
			background-color: #fff;
			padding: 2%;
			border: 5px dashed black;
			box-shadow: 0px 5px 10px #444; 
			animation: example 5s ease-in infinite;
			animation-direction: alternate;
			animation: fade 2s linear 1;
		}
		div#button{
			position: absolute;
			bottom: 30px;
			align-content: center;
			padding-left: 42%;
			align-self: center;
			animation: fade 2s ease-in 1;
		}
		i:hover{
			color: #eee;
			text-shadow: 2px 2px 2px #555;
		}

		@keyframes example {
    0%   {background-color: #1c0;box-shadow: 7px 7px 7px #555}
    25%  {background-color: #1d0;box-shadow: 8px 8px 8px #555}
    50%  {background-color: #1f0;box-shadow: 9px 9px 9px #555}
    100% {background-color: #1f0;box-shadow: 10px 10px 10px #555}
}

@keyframes example1 {
    0%   {text-shadow: 7px 7px 7px #555}
    25%  {text-shadow: 7.5px 7.5px 7.5px #444}
    50%  {text-shadow: 8px 8px 8px #444}
    100% {text-shadow: 8.5px 8.5px 8.5px #444}
}

@keyframes fade{
	0%{opacity: 0}
	25%{opacity: 0.25}
	50%{opacity: 0.5}
	75%{opacity: 0.75}
	100%{opacity: 1}
}

</style>

<link rel="icon" type="image/jpeg" href="iconia.jpg" />
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">


</head>
<body bgcolor="#bce954">

<div id="quo">
<font id="quo" face="Century Gothic" size="5px" color="#bced54"><i class="fa fa-hand-peace-o" aria-hidden="true"></i>

YEAHH!!</font><br>
 <font id="quo" face="Century Gothic" size="6px" color="#bced54">
 YOU HAVE BEEN <font id="quo" face="Century Gothic" size="7px" color="#bced54">SUCCESSFULLY REGISTERED! <i class="fa fa-check-circle" aria-hidden="true"></i>

</font>
<br></font><br><br>
<font id="quo" face="Century Gothic" size="5px" color="#bced54">
You\'ll be redirected to HOME in about 10 secs <i class="fa fa-clock-o" aria-hidden="true"></i>
. If not, click <a href="resort2.htm"><font id="quo" face="Century Gothic" size="5px" color="#bced54">here</font></a> or BELOW BUTTON.
</font>

<center><br>

<div id="button">
<a href="resort2.htm"><button><font face="Century Gothic" size="3px" color="#bced54"><b>GO TO HOME</b></font></button></a>
</div>

</body>
</html>';
}
echo "<script>alert (\"Your REGISTRATION DETAILS have been sent to Your Email. Please Check it Out!\")</script>";
echo '<br>';	
?>