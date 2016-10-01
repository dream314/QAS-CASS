<?php

date_default_timezone_set('America/New_York');

$dtest= date("d M y");

include '../admin/dbconnect.php';


//Animal ID

$anmlID = $_GET['anmlid'];
$moveTYPE = $_GET['movetype'];


$sql= "SELECT ANML_NAME, ISO FROM TBL_ANIMALS where AMNMLID=\"$anmlID\" " ;


echo	"<form role=\"form\"  action=\"cgi-bin/isoupd.php\" method=\"get\">";
      
echo 	"<div class=\"form-group\">";
echo	"<h4> Confirm Transfer Into ISO</h4>";


echo $moveTYPE;
//echo $sql;

echo "<table class=\"table table-striped\">";



$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){



echo "<tr><th>Name:</th><td>"  . $rows['anml_name'] . "</td></tr>";
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


