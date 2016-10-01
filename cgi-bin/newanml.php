<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="Refresh" content="0; url=../chartadd.php"> 
</head>


<body>



<?php

include '../admin/dbconnect.php';

date_default_timezone_set('America/New_York');
$dtest= date("Y-m-d G:i");

//Animal ID

$anmlID = $_POST['anmlid'];

//Animal Name

$anmlNAMWE= $_POST['anml_name'];

//Animal type

$anmlTYPE= $_POST['type'];

//ISO?

$ISOD= $_POST['iso'];


$sql= "INSERT INTO TBL_ANIMALS (ANMLID, ANML_NAME, TYPE, ISO) VALUES
		('$anmlID', '$anmlNAMWE', '$anmlTYPE','$ISOD'); "; 
echo $sql;


		
		if ($con->query($sql) === TRUE) {
    echo "New Record Created<br>";
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		}
		
mysqli_close($con);


?>

</body>

</html>