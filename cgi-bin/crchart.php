<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Refresh" content="0; url=../index.php"> 
</head>
<body>



<?php

include '../admin/dbconnect.php';

date_default_timezone_set('America/New_York');
$dtest= date("Y-m-d G:i");

// Start date
 $date = $_POST['sdate'];
 // End date
 $end_date = $_POST['edate'];

//Med ID

$medid = $_POST['medID'];

//Dosage
$dosage1 = $_POST['dosage'];

//Dosage
$dosenotes = $_POST['dosenotes'];


//Animal's ID

$anmlID = $_POST['anmlID'];


//Frequency
$tod = $_POST['tod'];



if ($tod == "ao") { 
while (strtotime($date) <= strtotime($end_date)) {
		$sql= "INSERT INTO DOSETABLE (Date, MEDID, DOSAGE, DOSENOTE,  TOD, ANMLID) VALUES
		('$date', '$medid', '$dosage1', '$dosenotes', 'AM', '$anmlID'); "; 
		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
		
		
		if ($con->query($sql) === TRUE) {
    echo "New record created successfully<br>";
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		}

 	}
 
 
 
 } elseif ($tod == "po") {
	while (strtotime($date) <= strtotime($end_date)) {
		$sql= "INSERT INTO DOSETABLE (Date, MEDID, DOSAGE, DOSENOTE, TOD, ANMLID) VALUES
		('$date', '$medid', '$dosage1', '$dosenotes', 'PM', '$anmlID')"; 
		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
		
		
		if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		}

 	}}
  else {
	while (strtotime($date) <= strtotime($end_date)) {
		$sql= "INSERT INTO DOSETABLE (Date, MEDID, DOSAGE, DOSENOTE,  TOD, anmlid) VALUES
		('$date', '$medid', '$dosage1', '$dosenotes', 'AM', '$anmlID'); "; 
		$sql01= "INSERT INTO DOSETABLE (Date, MEDID, DOSAGE, DOSENOTE,  TOD, anmlid) VALUES
		('$date', '$medid', '$dosage1', '$dosenotes', 'PM', '$anmlID'); "; 
		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
		
		
	if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		} 
		
	if ($con->query($sql01) === TRUE) {
    echo "New record created successfully";
		} else {
    echo "Error: " . $sql . "<br>" . $con->error;
		} 
		
 	}
 }



mysqli_close($con);
?>




</body>
</html>
