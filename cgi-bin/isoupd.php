<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Refresh" content="0; url=../index.php?dname=ISO">
</head>
<body>



<?php

$anmlID = $_GET['anmlid'];
$moveTYPE = $_GET['movetype'];

include '../admin/dbconnect.php';

date_default_timezone_set('America/New_York');
$dtest= date("Y-m-d G:i");


if   ($moveTYPE == 'IN') {
$sql= "UPDATE  TBL_ANIMALS set ISO = 'Y'  where ANMLID = '$anmlID'" ;


} else {

$sql= "UPDATE  TBL_ANIMALS set ISO = 'N'  where ANMLID = '$anmlID'" ;

}

echo $moveTYPE . "<br>";


		
		if ($con->query($sql) === TRUE) {
    echo "Record Updated<br>" . $sql;
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		}

mysqli_close($con);


?>

</body>

</html>