<?php

date_default_timezone_set('America/New_York');

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


//Dates and things

$orderby= " order by Name, Date, TOD ";

$dtest= date("Y-m-d");
$dtest01= date("d M y");




$date=date_create("$dtest");
date_add($date,date_interval_create_from_date_string("7 days"));
$wtest = date_format($date,"Y-m-d");
date_add($date,date_interval_create_from_date_string("30 days"));
$mtest = date_format($date,"Y-m-d");

//AM PM
$amtime=" and TOD=\"AM\" ";

$pmtime =" and TOD = \"PM\" ";


$today= "Date ='$dtest01'" ;

$week="week(Date)= (select week(current_date) )";

$month="Date BETWEEN \"" . $dtest . "\" AND \"" . $mtest . "\"";




//Type Searches

$catsql= "TYPE =\"C\" and ISO =\"N\" " ;

$dogsql= "TYPE =\"D\"  ";

$isosql= "TYPE =\"C\" and  ISO =\"Y\" "  ;

//Counts

$dogcount="select COUNT(DISTINCT(ID)) as CT from medsheet where type = 'D' and " . $today . " ";

$catcount="select COUNT(DISTINCT(ID)) as CT from medsheet where type = 'C'  and ISO !='y'  and " . $today . "" ;

$isocount="select COUNT(DISTINCT(ID)) as CT from medsheet where type = 'C'  and ISO ='y' and " . $today . " ";


?>
