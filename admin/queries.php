<?php

date_default_timezone_set('America/New_York');

//Dates and things

$orderby= " order by Name, Date, TOD ";

//$dtest= date("Y-m-d");
//$dtest01= date("d M y");

/*
$date=date_create("$dtest");
date_add($date,date_interval_create_from_date_string("7 days"));
$wtest = date_format($date,"Y-m-d");
date_add($date,date_interval_create_from_date_string("30 days"));
$mtest = date_format($date,"Y-m-d");

*/

//AM PM
$amtime=" and TOD=\"AM\" ";

$pmtime =" and TOD = \"PM\" ";


$today= "Date =(select date_format(current_date, '%d %b %y'))" ;

$week="week(Date)= (select week(current_date) )";

$month="Date BETWEEN (select date_format(current_date, '%d %b %y'))" AND "\"" . $mtest . "\"";




//Overview query

$ovrsql= "SELECT * FROM medsheet where ";

$indsql= "SELECT * FROM medsheet ";

//Name List

$namesql = "SELECT DISTINCT anmlid, anml_name from TBL_ANIMALS where anmlid !=0 order by anml_name ";

//Volunteers List

$volsql = "SELECT DISTINCT volid, lastname, firstname from TBL_VOLUNTEERS where volid !=0 order by lastname";


//Meds List

$medsql = "SELECT DISTINCT MEDID, MEDNAME from MEDSTABLE order by MEDNAME";

//Dose Confirm
$dosecsql = "SELECT Name, Dose, Medication, Date, TOD FROM medsheet";


//Type Searches

$catsql= "TYPE =\"C\" and ISO =\"N\" " ;

$dogsql= "TYPE =\"D\" and ISO =\"N\" ";

$isosql= "TYPE =\"C\" and  ISO =\"Y\" "  ;

//Counts

$counter="select COUNT(DISTINCT(ID)) as CT from medsheet where ";

$dogcount=$counter . $dogsql . " and " . $today;

$catcount=$counter . $catsql . "  and " . $today;

$isocount=$counter . $isosql . " and " . $today;




?>
