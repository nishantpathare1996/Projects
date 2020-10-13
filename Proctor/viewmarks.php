<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
    echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
    echo 'db not selected';
}
    
$grno= $_SESSION["grno"];


$sql = "SELECT * FROM sem1 WHEre grno='$grno'";
$result = $con->query($sql);
if(!mysqli_query($con,$sql)){
    echo 'registertion failed';
}

    // output data of each row
    $row = $result->fetch_assoc();

    echo '<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-U-A Compatible" content="IE-edge">
        <meta name="viewport" content="Width=device-width,initial-scale=1">
        <title>FORMit1</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/proctor.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                        <li class="active"><a href="login.php">Home</a></li>
                       
                    </ul>
            </div>
        </nav><h4> Semester 1</h4><br/><br/>
    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-hgcj{font-weight:bold;text-align:center}
    .tg .tg-amwm{font-weight:bold;font-color:black;text-align:center;vertical-align:center}
    .tg .tg-yw4l{vertical-align:top}
</style>
<div class="table-responsive">

<table class="tg" style="undefined;width: 2500px;table-layout: fixed;">
    <colgroup>
        <col style="width: 90px">
        <col style="width: 70px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
          <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 55px">
        <col style="width: 65px">
        <col style="width: 75px">
    </colgroup>
    <tr>
    <th class="tg-hgcj" rowspan="2">Courses-&gt;</th>
    <th class="tg-hgcj">Code</th>
    <th class="tg-amwm" colspan="6">'.$row["scode1"].'</th>
    <th class="tg-amwm" colspan="6">'.$row["scode2"].'</th>
    <th class="tg-amwm" colspan="6">'.$row["scode3"].'</th>
    <th class="tg-amwm" colspan="6">'.$row["scode4"].'</th>
    <th class="tg-amwm" colspan="6">'.$row["scode5"].'</th>
    <th class="tg-amwm" colspan="6">'.$row["scode6"].'</th>
    <th class="tg-amwm" rowspan="2"><br>TOT</th>
    <th class="tg-amwm" rowspan="2"><br>SGPI<br>(GPA)</th>
    <th class="tg-amwm" rowspan="2"><br>RESULT</th>
    <th class="tg-amwm" rowspan="2"><br>REMARKS</th>
    </tr>
  <tr>
    <td class="tg-hgcj" >Subject</td>
    <td class="tg-amwm" colspan="6">'.$row["sub1"].'</td>


    <td class="tg-amwm" colspan="6">'.$row["sub2"].'</td>

    <td class="tg-amwm" colspan="6">'.$row["sub3"].'</td>

    <td class="tg-amwm" colspan="6">'.$row["sub4"].'</td>

    <td class="tg-amwm" colspan="6">'.$row["sub5"].'</td>

    <td class="tg-amwm" colspan="6">'.$row["sub6"].'</td>
  </tr>
  
  <tr>
    <td class="tg-hgcj" rowspan="7">Seat no./<br>Name of Student</td>
    <td class="tg-hgcj"></td>
    <!- 1st->
    <td class="tg-amwm">ESE </td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td >
    <td class="tg-amwm">PR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>
    <!-2nd->
     <td class="tg-amwm">ESE</td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td>
    <td class="tg-amwm">PR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>
    <!-3rd->
     <td class="tg-amwm">ESE</td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td>
    <td class="tg-amwm">OR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>
    <!-4th->
     <td class="tg-amwm">ESE</td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td>
    <td class="tg-amwm">PR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>
    <!-5th->
    <td class="tg-amwm">ESE</td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td>
    <td class="tg-amwm">PR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>
    <!-6th->
    <td class="tg-amwm">ESE</td>
    <td class="tg-amwm">IA</td>
    <td class="tg-amwm">TOT</td>
    <td class="tg-amwm">PR</td>
    <td class="tg-amwm">TW</td>    
    <td class="tg-amwm">TOT</td>

    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
  </tr>
  <tr>
    <td class="tg-hgcj">MaxM</td>
    <!-1st->
    <td class="tg-amwm" id="m1">80</td>
    <td class="tg-amwm" id="m2">20</td>
    <td class="tg-amwm" id="m3">100</td>
    <td class="tg-amwm" id="m4">25</td>
    <td class="tg-amwm" id="m5">25</td>
    <td class="tg-amwm" id="m6">50</td>
    <!-2nd->
    <td class="tg-amwm" id="mm1">80</td>
    <td class="tg-amwm" id="mm2">20</td>
    <td class="tg-amwm" id="mm3">100</td>
    <td class="tg-amwm" id="mm4">25</td>
    <td class="tg-amwm" id="mm5">25</td>
    <td class="tg-amwm" id="mm6">50</td>
    <!-3rd->
    <td class="tg-amwm" id="mmm1">80</td>
    <td class="tg-amwm" id="mmm2">20</td>
    <td class="tg-amwm" id="mmm3">100</td>
    <td class="tg-amwm" id="mmm4">25</td>
    <td class="tg-amwm" id="mmm5">25</td>
    <td class="tg-amwm" id="mmm6">50</td>
    <!-4th->
    <td class="tg-amwm" id="mm11">80</td>
    <td class="tg-amwm" id="mm22">20</td>
    <td class="tg-amwm" id="mm33">100</td>
    <td class="tg-amwm" id="mm44">25</td>
    <td class="tg-amwm" id="mm55">25</td>
    <td class="tg-amwm" id="mm66">50</td>
    <!-5th->
    <td class="tg-amwm" id="mn1">80</td>
    <td class="tg-amwm" id="mn2">20</td>
    <td class="tg-amwm" id="mn3">100</td>
    <td class="tg-amwm" id="mn4">25</td>
    <td class="tg-amwm" id="mn5">25</td>
    <td class="tg-amwm" id="mn6">50</td>
    
    <!6th->
    <td class="tg-amwm" id="mn11">80</td>
    <td class="tg-amwm" id="mn12">20</td>
    <td class="tg-amwm" id="mn13">100</td>
    <td class="tg-amwm" id="mn14">25</td>
    <td class="tg-amwm" id="mn15">25</td>
    <td class="tg-amwm" id="mn16">50</td>

    <td class="tg-amwm">725</td>
    <td class="tg-amwm"></td>   
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
  </tr>
  <tr>
    <td class="tg-hgcj">MinM</td>
    <!-1st->
    <td class="tg-amwm" id="n1">32</td>
    <td class="tg-amwm" id="n2">8</td>
    <td class="tg-amwm" id="n3">40</td>
    <td class="tg-amwm" id="n4">10</td>
    <td class="tg-amwm" id="n5">10</td>
    <td class="tg-amwm" id="n6">20</td>
    <!-2nd->
     <td class="tg-amwm" id="nn1">32</td>
    <td class="tg-amwm" id="nn2">8</td>
    <td class="tg-amwm" id="nn3">40</td>
    <td class="tg-amwm" id="nn4">10</td>
    <td class="tg-amwm" id="nn5">10</td>
    <td class="tg-amwm" id="nn6">20</td>
    <!-3rd->
     <td class="tg-amwm" id="nnn1">32</td>
    <td class="tg-amwm" id="nnn2">8</td>
    <td class="tg-amwm" id="nnn3">40</td>
    <td class="tg-amwm" id="nnn4">10</td>
    <td class="tg-amwm" id="nnn5">10</td>
    <td class="tg-amwm" id="nnn6">20</td>
     <!-4th->
     <td class="tg-amwm" id="nn11">32</td>
    <td class="tg-amwm" id="nn22">8</td>
    <td class="tg-amwm" id="nn33">40</td>
    <td class="tg-amwm" id="nn44">10</td>
    <td class="tg-amwm" id="nn55">10</td>
    <td class="tg-amwm" id="nn66">20</td>
     <!-5th->
    <td class="tg-amwm" id="nm1">32</td>
    <td class="tg-amwm" id="nm2">8</td>
    <td class="tg-amwm" id="nm3">40</td>
    <td class="tg-amwm" id="nm4">10</td>
    <td class="tg-amwm" id="nm5">10</td>
    <td class="tg-amwm" id="nm6">20</td>
    <!-6th->
     <td class="tg-amwm" id="nm11">32</td>
    <td class="tg-amwm" id="nm12">8</td>
    <td class="tg-amwm" id="nm13">40</td>
    <td class="tg-amwm" id="nm14">10</td>
    <td class="tg-amwm" id="nm15">10</td>
    <td class="tg-amwm" id="nm16">20</td>

    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
  </tr>
  <tr>
    
    <td class="tg-hgcj">Marks</td>
        <!-1st->
    <td class="tg-amwm">'.$row["m11"].'</td>
    <td class="tg-amwm">'.$row["m12"].'</td>
    <td class="tg-amwm">'.$row["m13"].'</td>
    <td class="tg-amwm">'.$row["m14"].'</td>
    <td class="tg-amwm">'.$row["m15"].'</td>
    <td class="tg-amwm">'.$row["m16"].'</td>
        <!-2nd->
    <td class="tg-amwm">'.$row["m21"].'</td>
    <td class="tg-amwm">'.$row["m22"].'</td>
    <td class="tg-amwm">'.$row["m23"].'</td>
    <td class="tg-amwm">'.$row["m24"].'</td>
    <td class="tg-amwm">'.$row["m25"].'</td>
    <td class="tg-amwm">'.$row["m26"].'</td>
        <!-3rd->
    <td class="tg-amwm">'.$row["m31"].'</td>
    <td class="tg-amwm">'.$row["m32"].'</td>
    <td class="tg-amwm">'.$row["m33"].'</td>
    <td class="tg-amwm">'.$row["m34"].'</td>
    <td class="tg-amwm">'.$row["m35"].'</td>
    <td class="tg-amwm">'.$row["m36"].'</td>
    <!-4th->
    <td class="tg-amwm">'.$row["m41"].'</td>
    <td class="tg-amwm">'.$row["m42"].'</td>
    <td class="tg-amwm">'.$row["m43"].'</td>
    <td class="tg-amwm">'.$row["m43"].'</td>
    <td class="tg-amwm">'.$row["m44"].'</td>
    <td class="tg-amwm">'.$row["m46"].'</td>
    <!-5th->
    <td class="tg-amwm">'.$row["m51"].'</td>
    <td class="tg-amwm">'.$row["m52"].'</td>
    <td class="tg-amwm">'.$row["m53"].'</td>
    <td class="tg-amwm">'.$row["m54"].'</td>
    <td class="tg-amwm">'.$row["m55"].'</td>
    <td class="tg-amwm">'.$row["m56"].'</td>
    <!-6th->
    <td class="tg-amwm">'.$row["m61"].'</td>
    <td class="tg-amwm">'.$row["m62"].'</td>
    <td class="tg-amwm">'.$row["m63"].'</td>
    <td class="tg-amwm">'.$row["m64"].'</td>
    <td class="tg-amwm">'.$row["m65"].'</td>
    <td class="tg-amwm">'.$row["m66"].'</td>

    <td class="tg-baqh" name="total"><p id="thisissparta"></td>
    <td class="tg-baqh">'.$row["sgpi"].'</td>
    <td class="tg-baqh">'.$row["result"].'P</td>
    <td class="tg-baqh">'.$row["remark"].'good</td>
  </tr>
  <tr>
    <!--<td class="tg-hgcj" rowspan="3"></td>-->
    <td class="tg-hgcj">Grade(G)</td>
    <!-1st->
    <td class="tg-amwm">'.$row["g11"].'</td>
    <td class="tg-amwm">'.$row["g12"].'</td>
    <td class="tg-amwm">'.$row["g13"].'</td>
    <td class="tg-amwm">'.$row["g14"].'</td>
    <td class="tg-amwm">'.$row["g15"].'</td>
    <td class="tg-amwm">'.$row["g16"].'</td>
    <!-2th->
    <td class="tg-amwm">'.$row["g21"].'</td>
    <td class="tg-amwm">'.$row["g22"].'</td>
    <td class="tg-amwm">'.$row["g23"].'</td>
    <td class="tg-amwm">'.$row["g24"].'</td>
    <td class="tg-amwm">'.$row["g25"].'</td>
    <td class="tg-amwm">'.$row["g26"].'</td>
    <!-3th->
    <td class="tg-amwm">'.$row["g31"].'</td>
    <td class="tg-amwm">'.$row["g32"].'</td>
    <td class="tg-amwm">'.$row["g33"].'</td>
    <td class="tg-amwm">'.$row["g34"].'</td>
    <td class="tg-amwm">'.$row["g35"].'</td>
    <td class="tg-amwm">'.$row["g36"].'</td>
    <!-4th->
    <td class="tg-amwm">'.$row["g41"].'</td>
    <td class="tg-amwm">'.$row["g42"].'</td>
    <td class="tg-amwm">'.$row["g43"].'</td>
    <td class="tg-amwm">'.$row["g44"].'</td>
    <td class="tg-amwm">'.$row["g45"].'</td>
    <td class="tg-amwm">'.$row["g46"].'</td>
    <!-5th->
    <td class="tg-amwm">'.$row["g51"].'</td>
    <td class="tg-amwm">'.$row["g52"].'</td>
    <td class="tg-amwm">'.$row["g53"].'</td>
    <td class="tg-amwm">'.$row["g54"].'</td>
    <td class="tg-amwm">'.$row["g55"].'</td>
    <td class="tg-amwm">'.$row["g56"].'</td>
    <!-6th->
    <td class="tg-amwm">'.$row["g61"].'</td>
    <td class="tg-amwm">'.$row["g62"].'</td>
    <td class="tg-amwm">'.$row["g63"].'</td>
    <td class="tg-amwm">'.$row["g64"].'</td>
    <td class="tg-amwm">'.$row["g65"].'</td>
    <td class="tg-amwm">'.$row["g66"].'</td>

    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-hgcj">Credit(C)<br></td>
    <!-1st->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c13"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c16"].'</td>
    <!-2th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c23"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c26"].'</td>
    <!-3th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c33"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c36"].'</td>
    <!-4th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c43"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c46"].'</td>
    <!-5th->
     <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c53"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c56"].'</td>
    <!-6th->
     <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c63"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["c66"].'</td>
    
    
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-hgcj">G*C</td> <!-1st->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc13"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc16"].'</td>
    <!-2th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc23"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc26"].'</td>
    <!-3th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc33"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc36"].'</td>
    <!-4th->
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc43"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc46"].'</td>
    <!-5th->
     <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc53"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc56"].'</td>
    <!-6th->
     <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc63"].'</td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm"></td>
    <td class="tg-amwm">'.$row["gc66"].'</td>
       
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-hgcj" colspan="2">ATTEMPT NO.<br></td>
    <!-1st->
    <td class="tg-amwm" colspan="37">'.$row["attempt"].'</td>
        
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    
  </tr>
  <tr>
    <td class="tg-hgcj" colspan="2">SEAT NO.<br></td>
    <!-1st->
    <td class="tg-amwm" colspan="37">'.$row["seatno"].'</td>
    
    
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
  <tr>
    <td class="tg-hgcj" colspan="2">MONTH AND YEAR</td>
    <!-1st->
    <td class="tg-amwm" colspan="37"><id="year" name="year" ></td>
    
    
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
</table>
</div>'
?>
