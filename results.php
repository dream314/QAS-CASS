<!DOCTYPE html>
<html lang="en">
<head>
  <title>MedDB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
  <style>
  table {
    border-collapse: separate;
    border-spacing: 0px 0px;
}

	#tblbtmcontent	{
	    border-bottom:1px solid red;
		border-right:1px solid red;
}
	#leftlabel	{
		    border-top:1px solid red;
		    border-left:1px solid red;
		    border-bottom:1px solid red;
		    broder-top-left-radius:10px;
		    broder-bottom-left-radius:10px;


}	
	#tblcontent	{
		    border-top:1px solid red;
		    padding:10px;
		    

}	

	#topright	{
			border-top:1px solid red;
		    border-right:1px solid red;
}

	</style>
	
</head>
<body>

<?
$dname=$_GET['dname'];
$tname=$_GET['tname'];
$tod=$_GET['TOD'];





include 'admin/dbconnect.php';

include 'admin/queries.php';

date_default_timezone_set('America/New_York');


/*
if (empty($tod)) {
$t = time(); # or any other timestamp
if (date('H', $t) < 17) {
$tod = "AM";
} else {
$tod = "PM";

}

}

*/

$dtest= date("m/d");
//echo $dtest ;


switch ($dname)
        {
        case "CAT":
        $sql= $indsql . " where " .  $catsql;
		$linker=" AND ";
		$displayname = "Cats";
		$btncolor = "warning";
		$ticon = "github";		
        break;

        case "DOG":
		$sql= $indsql . " where " . $dogsql;
		$linker=" AND ";
		$displayname = "Dogs";	
		$btncolor = "danger";
		$ticon = "paw";	
        break;

        case "ISO":
		$sql= $indsql . " where " . $isosql ;
		$linker=" AND ";
		$displayname = "ISO";
		$btncolor = "info";
		$ticon = "medkit";
        break;
  
        case "ALL":
		$sql= $indsql  ;
		$linker=" WHERE ";

        break;
        
        case "";
        $sql= $indsql  ; 
       	$linker=" WHERE ";
               
        default:
        $sql = $indsql ;

}

   switch ($tod)
        {
        	
        	
        case "AM":
        
        	$sql= $sql . $linker . $today . $amtime;
        
        break;
        
        case "PM":
		
        	$sql= $sql . $linker . $today . $pmtime;
		
        break;
        
          case "":
        
        	$t = time(); 
			if (date('H', $t) < 15) {
			$sql= $sql . $linker . $today . $amtime;
			$tod = "AM" ;
			} else {
			$sql= $sql . $linker . $today . $pmtime;
			$tod = "PM";
			}
        
        break;
        
}
        	


/*
        switch ($tname)
        {
        	
        	
        case "TODAY":
        
        	$sql= $sql . $linker . $today;
        
        break;
        
        case "WEEK":
		
		$sql= $sql . $linker .  $week ;
		
        break;
        
        
        case "MONTH":
		
		$sql= $sql . $linker . $month ;
		
        break;
        
        case "":
        
        	$sql= $sql . $linker . $today;
        
        break;
        
      
        }

        
  */    
$sql= $sql . $orderby;
//echo $sql;

?>






<div class="container-fluid">

<div class="row">
<div class="row.content">

<div class="panel panel-<? echo $btncolor ?>">
  <div class="panel-heading">
<div class="container-fluid">
<div>
	<h1>
	
    <? echo "<span class=\"label label-" . $btncolor . "\"><i class=\"fa fa-" . $ticon . "\"></i> " . $displayname . " " . $dtest  . "</span>" ?>
     
    
    
      
      
      <div  class="btn-group ">
  <button type="button" class="btn btn-lg btn-<? echo $btncolor ?> "> <? echo $tod ; ?></button>
  <button type="button" class="btn btn-lg btn-<? echo $btncolor ?> dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
  <?
    echo "<li><a  class=\"btn \" onclick=\"loadnewDoc('results.php?dname=" . $dname ."&TOD=AM')\"><i class=\"fa fa-sun-o\"></i> AM</a></li>";
    echo "<li><a  class=\"btn  \" onclick=\"loadnewDoc('results.php?dname=" . $dname . "&TOD=PM')\"><i class=\"fa fa-moon-o\"></i> PM</a></li>";
    
?>
  </ul>
</div>
 </h1> 
  </div>
    </div>
    
	</div>

	
	
<div class="panel panel-body">	
	
	

  

<table class="table">
<!-- <tr class="danger"><th>Name</th><th>Med</th><th>Dose</th><th>ADM</th></tr> -->
<?
$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){

/*
$fordate=$rows['Date'];

$date=date_create("$fordate");
$fordate=date_format($date,"M d");
*/

echo "<tr  ><td class=\"danger\" id=\"leftlabel\"rowspan=\"2\"><span ><b>"  . $rows['Name'] . "</b></span></td><td id=\"tblcontent\">" . $rows['Medication'] . 
"</td><td id=\"tblcontent\">" . $rows['Dose'] . "</td>" ;



if   ($rows['ADM'] == 'Y') {

echo "<td class=\"danger\" id=\"topright\"><b>" . $rows['INITIALS'] . "</b></td></tr>";

} else {

echo  "<td id=\"topright\"><button class=\"btn  btn-" . $btncolor . "\" data-toggle=\"modal\" data-target=\"#admModal\" onclick=\"admDoc('" . $rows['DOSEID'] . "','" . $dname ." ')\">ADM</button></td></tr>";



//echo "<td>" . $rows['lastname'] . "</td><td>" . $rows['firstname'] . "</td></tr>";

}

if(empty($rows['DOSENOTE']) == false){


echo "<tr><td  id=\"tblbtmcontent\" colspan=\"3\"><b>Notes:</b><br />" . $rows['DOSENOTE'] . "</td></tr>";

} else {

echo "<tr><td  id=\"tblbtmcontent\" colspan=\"3\"></td></tr>";

}

echo "<tr><td></td></tr>";
}


mysqli_close($con);

?>

</table>
</div>


</div>
</div>

</div>

</div>


</body>
</html>
