<!DOCTYPE html>
<html lang="en">
<head>
  <title>MedDB</title>
 

</head>
<body>

<?php

date_default_timezone_set('America/New_York');

include '../admin/dbconnect.php';


//Dose ID

$doseID = $_GET['doseid'];
$dname = $_GET['dname'];


$sql= "SELECT Name, Dose, Medication, Date, TOD, DOSENOTE FROM medsheet where DOSEID =\"$doseID\" " ;


//echo $sql;

echo	"<div class=\"modal-header\">";
echo	"<button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>";
echo	"<h4> Confirm<span class=\"glyphicon glyphicon-check\"></span></h4>";
echo	"</div>";

echo	"<div class=\"modal-body\">";
echo	"<form role=\"form\"  action=\"cgi-bin/tester.php\" method=\"post\">";
echo	"<div class=\"form-group\">";

echo "<table class=\"table table-striped\">";



$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){

$fordate=$rows['Date'];

$date=date_create("$fordate");
$fordate = date_format($date,"M d Y");

echo "<tr><th>Name:</th><td>"  . $rows['Name'] . "</td></tr>";
echo "<tr><th>Date:</th><td>"  . $fordate . "</td></tr>";
echo "<tr><th>TOD:</th><td>"  . $rows['TOD'] . "</td></tr>";
echo "<tr><th>Medication:</th><td>"  . $rows['Medication'] . "</td></tr>";
echo "<tr><th>Dose:</th><td>"  . $rows['Dose'] . "</td></tr>";


if(empty($rows['DOSENOTE']) == false){


echo "<tr><th>Notes:</th><td></td></tr>";
echo  "<tr><td colspan=\"2\">" . $rows['DOSENOTE'] . "</td></tr>";

}


}



echo "</table>" ;



echo "<form action=\"cgi-bin/tester.php\" method=\"post\">";

include '../vollist.php';


echo "<input type=\"hidden\" name=\"doseid\" value='$doseID'>";
echo "<input type=\"hidden\" name=\"dname\" value='$dname'>";


mysqli_close($con);

echo	"<div class=\"modal-footer\">";
echo	"<button type=\"submit\" class=\"btn btn-primary btn-default \">";
echo	"<span class=\"glyphicon glyphicon-check\"></span> OK</button>";
echo 	"<button type=\"reset\" class=\"btn btn-primary btn-default \" data-dismiss=\"modal\">";
echo 	"<span class=\"glyphicon glyphicon-remove\"></span> Cancel</button>";
		
echo 	"</div>";
echo 	"</div>";
echo	"</form>";


?>
</body>
</html>
