<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

$dname = $_POST['dname'];

echo "<meta http-equiv=\"Refresh\" content=\"0; url=../index.php?dname=" . $dname .  "\">";
 
?>
</head>
<body>



<?php

include '../admin/dbconnect.php';

date_default_timezone_set('America/New_York');
$dtest= date("Y-m-d G:i");

//Dose ID

$doseID = $_POST['doseid'];

//Volunteer ID

$volID = $_POST['volid'];

$dname = $_POST['dname'];


$sql= "UPDATE  DOSETABLE set ADM = 'Y', VOLID = '$volID' where DOSEID = '$doseID'" ;

//echo $sql;

//echo $dname;

		
		if ($con->query($sql) === TRUE) {
    echo "Record Updated<br>" . $sql;
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		}
		


?>

</body>

</html>