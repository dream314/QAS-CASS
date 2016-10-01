<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/sb-admin-2.css" rel="stylesheet">

<!--	<style>
		.row {
		background-color: #A7F432;
		}
	</style> -->
	
</head>

<html>

<body>
<div id="wrapper">
<div class="container">
<div class="row col-lg-6">
<div class="row.content">


<?php

include 'admin/dbconnect.php';

include 'admin/queries.php';

$anmlid = "25";

$sql = "select Name, Medication, Dose from medsheet where ID = $anmlid";


$result = mysqli_query($con,$sql);


if ($result === false) { echo "An error occurred."; }


$name = $result->fetch_object()->Name;
$med = $result->fetch_object()->Medication;
$doze = $result->fetch_object()->Dose;

echo "<h3>" . $name ."</h3>";
echo "<h4>"  . $med . "  " . $doze ."</h4>";

?>

<table class="table table-striped">


<tr><th>Date</th><th>Shift</th><th>ADM</th></tr>


<?

$sql = "select  Date, TOD, adm, INITIALS   from medsheet where ID =" . $anmlid . " order by Date; ";


$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){

$fordate=$rows['Date'];

$date=date_create("$fordate");
$fordate=date_format($date,"M d");


echo "<tr><td>" . $fordate . "</td><td>" . $rows['TOD'] ."</td><td>" ;

if   ($rows['adm'] == 'Y') {

//echo "<span class=\"glyphicon glyphicon-ok\"></span>";
echo  $rows['INITIALS'] . "</td></tr>";

} else {

echo  "<button class=\"btn  btn-primary\" data-toggle=\"modal\" data-target=\"#admModal\" onclick=\"admDoc('" . $rows['doseid'] . "','" . $dname ." ')\">ADM</button>";


echo "</td>";


echo "</tr>";

//echo "<td>" . $rows['lastname'] . "</td><td>" . $rows['firstname'] . "</td></tr>";

}

}


 
 
 mysqli_close($con);
 ?>
</table> 

</div>
</div>
</div>
</div>
 </body>
 </html>