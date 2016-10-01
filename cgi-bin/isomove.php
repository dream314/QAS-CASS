<?php

date_default_timezone_set('America/New_York');

$dtest= date("d M y");

include '../admin/dbconnect.php';


//Animal ID

$anmlID = $_GET['anmlid'];
$moveTYPE = $_GET['movetype'];


$sql= "SELECT ANML_NAME, ISO FROM TBL_ANIMALS where ANMLID =\"$anmlID\" " ;

//echo $moveTYPE;

echo	"<div class=\"modal-header\">";
echo	"<button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>";
echo	"<h4> Confirm<span class=\"glyphicon glyphicon-check\"></span></h4>";
echo	"</div>";

echo	"<div class=\"modal-body\">";

echo	"<form role=\"form\"  action=\"cgi-bin/isoupd.php\" method=\"get\">";
      
echo 	"<div class=\"form-group\">";


if ($moveTYPE=='IN') {
echo	"<h4> Confirm Transfer Into ISO</h4>";
} else {
echo	"<h4> Confirm Transfer Out Of ISO</h4>";
}


//echo $sql;

echo "<table class=\"table table-striped\">";



$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){



echo "<tr><th>Name:</th><td>"  . $rows['ANML_NAME'] . "</td></tr>";
echo "<tr><th>ISO:</th><td>"  . $rows['ISO'] .  "</td></tr>";

echo "<tr><th>Date:</th><td>" . $dtest . "</td></tr>";



}



echo "</table>";

echo "<input type=\"hidden\" name=\"anmlid\" value='$anmlID'>";

echo "<input type=\"hidden\" name=\"movetype\" value='$moveTYPE'>";

echo	"<div class=\"modal-footer\">";
echo	"<button type=\"submit\" class=\"btn btn-primary btn-default \">";
echo	"<span class=\"glyphicon glyphicon-check\"></span> OK</button>";
echo 	"<button type=\"reset\" class=\"btn btn-primary btn-default \" data-dismiss=\"modal\">";
echo 	"<span class=\"glyphicon glyphicon-remove\"></span> Cancel</button>";
		
echo 	"</div>";
echo 	"</div>";
echo	"</form>";



mysqli_close($con);



?>


