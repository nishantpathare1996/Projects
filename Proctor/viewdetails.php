<?php
session_start();

$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
  echo 'not connected to server';
}
if(!mysqli_select_db($con,'PROCTORit')){
  echo 'db not selected';
}

$grno=$_SESSION["grno"];
$fpassword=$_SESSION["password"];




$sql1="SELECT * FROM details WHERE grno='$grno'";
$result1 = $con->query($sql1);


while($row = mysqli_fetch_array($result1)) {
    echo '<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-U-A Compatible" content="IE-edge">
    <meta name="viewport" content="Width=device-width,initial-scale=1">
    <title>PROCTORit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/proctor.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>


  <body id="menu1">

    <div id="menu" class="container-fluid">
      
      <br>
      <h1 id="heading" align="center">PROCTORit</h1>
      <br>
        
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
    </nav><style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-2ro4{font-weight:bold;background-color:#ffffff;color:#000000}
.tg .tg-yvvu{font-weight:bold;background-color:#ffffff;color:#000000;text-align:center}
.tg .tg-ek65{background-color:#ffffff;color:#000000}
.tg .tg-pxng{background-color:#ffffff;color:#000000;vertical-align:top}
.tg .tg-6997{background-color:#ffffff;color:#000000;text-align:center}
.tg .tg-scrz{font-weight:bold;background-color:#ffffff;color:#000000;text-align:center;vertical-align:top}
.tg .tg-9d65{font-weight:bold;background-color:#ffffff;color:#000000;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 700px ;margin-left:200px">
<colgroup>
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
<col style="width: 81px">
</colgroup>
  <tr>
    <th class="tg-yvvu" colspan="8">STUDENT INFORMATION SHEET</th>
  </tr>
  <tr>
    <td class="tg-2ro4" colspan="2">Branch</td>
    <td class="tg-2ro4" colspan="2">'.$row["branch"].'</td>
    <td class="tg-2ro4" colspan="2">Roll no.</td>
    <td class="tg-ek65">'.$row["rollno"].'</td>
    <td class="tg-pxng"></td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="2">Name</td>
    <td class="tg-yvvu" colspan="6">'.$row["name"].'</td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="2">Nickname</td>
    <td class="tg-yvvu" colspan="2">'.$row["nickname"].'</td>
    <td class="tg-yvvu" colspan="2">DOB </td>
    <td class="tg-ek65">'.$row["dob"].'</td>
    <td class="tg-pxng"></td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="3">Student contact no.</td>
    <td class="tg-yvvu" colspan="5">'.$row["smob"].'</td>
   
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="3">Student email address</td>
    <td class="tg-yvvu" colspan="5">'.$row["email"].'</td>
    
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="8">PARENTS DETAILS</td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="2">Fathers Name</td>
    <td class="tg-yvvu" colspan="2">'.$row["fname"].'</td>
    <td class="tg-yvvu" colspan="2">Mothers Name</td>
    <td class="tg-6997" colspan="2">'.$row["mname"].'</td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="2">Occupation</td>
    <td class="tg-yvvu" colspan="2">'.$row["foccupation"].'</td>
    <td class="tg-yvvu" colspan="2">Occupation</td>
    <td class="tg-ek65" colspan="2">'.$row["moccupation"].'</td>
  </tr>
  <tr>
    <td class="tg-yvvu" colspan="4">Home address</td>
    <td class="tg-yvvu" colspan="4">Present address</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="4">'.$row["haddr"].'</td>
    <td class="tg-scrz" colspan="4">'.$row["paddr"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="3">Parent email address</td>
    <td class="tg-scrz" colspan="5">'.$row["pemail"].'</td>
  </tr>
 
  <tr>
    <td class="tg-scrz" colspan="3">Siblings name and ages</td>
    <td class="tg-pxng" colspan="5">'.$row["sibling"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="8">STUDENTS ACADEMIC DETAILS</td>
  </tr>
  <tr>
    <td class="tg-scrz"></td>
    <td class="tg-scrz" colspan="2">%</td>
    <td class="tg-scrz" colspan="2">Medium</td>
    <td class="tg-scrz" colspan="3">Board</td>
  </tr>
  <tr>
    <td class="tg-scrz">SSC</td>
    <td class="tg-scrz" colspan="2">'.$row["ssc"].'</td>
    <td class="tg-scrz" colspan="2">'.$row["smedium"].'</td>
    <td class="tg-scrz" colspan="3">'.$row["sboard"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz">HSC</td>
    <td class="tg-scrz" colspan="2">'.$row["hsc"].'</td>
    <td class="tg-scrz" colspan="2">'.$row["hmedium"].'</td>
    <td class="tg-scrz" colspan="3">'.$row["hboard"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="8">MEDICAL DETAILS</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Blood group</td>
    <td class="tg-scrz">'.$row["bg"].'</td>
    <td class="tg-scrz" colspan="2">Height</td>
    <td class="tg-9d65">'.$row["ht"].'</td>
    <td class="tg-scrz">Weight</td>
    <td class="tg-9d65">'.$row["wt"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Health Problems:</td>
    <td class="tg-scrz" colspan="6">'.$row["hp"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Hobbies</td>
    <td class="tg-scrz" colspan="6">'.$row["hobbies"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Strength and weakness</td>
    <td class="tg-scrz" colspan="6">'.$row["strengths"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="8">GOALS</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Short term</td>
    <td class="tg-scrz" colspan="6">'.$row["stgoals"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="2">Long term</td>
    <td class="tg-scrz" colspan="6">'.$row["ltgoals"].'</td>
  </tr>
  <tr>
    <td class="tg-scrz" colspan="3">Extra carricular activities:</td>
    <td class="tg-scrz" colspan="5">'.$row["extra"].'</td>
  </tr>
</table>';
}
echo "</table>";
?>