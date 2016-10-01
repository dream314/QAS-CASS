<!DOCTYPE html>
<html lang="en">
<head>
  <title>ISO Manager</title>
<!--  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 	 <link rel="stylesheet" href="css/bootstrap.min.css">


     <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
-->
</head>
<body>

<div class="container-fluid">

<div class="row content">


<?

echo	"<div class=\"modal-header\">";
echo	"<button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>";
echo	"<h4>Manage ISO Patients<span class=\"glyphicon glyphicon-check\"></span></h4>";
echo	"</div>";

echo	"<div class=\"modal-body\">";

include '../admin/dbconnect.php';

$sql = "select * from TBL_ANIMALS where ANMLID !=0 and TYPE='C'";

//$sql = "select * from TBL_ANIMALS where ANMLID !=0 and TYPE=\'C\';";

echo	"<table class=\"table table-striped table-bordered\">";
echo	"<tr><th class=\"hidden\">ID</th><th>Name</th><th>Type</th><th>ISO</th><th>Buttons</th></tr>";

//echo $sql;


$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){

echo "<tr><td>" . $rows['ANML_NAME'] . "</td><td>" . $rows['TYPE'] . "</td><td>" . $rows['ISO'] . "</td>";

if   ($rows['ISO'] == 'Y') {
echo  "<td><button class=\"btn  btn-info\" data-toggle=\"modal\" data-target=\"#admModal\" onclick=\"loadmoveDoc('" . $rows['ANMLID'] . "', 'OUT')\">Remove</button></td></tr>";


} 

else {

echo  "<td><button class=\"btn  btn-primary\" data-toggle=\"modal\" data-target=\"#admModal\" onclick=\"loadmoveDoc('" . $rows['ANMLID'] . "', 'IN')\">Add___</button></td></tr>";

}
}
mysqli_close($con);

?>


</div>
	
</table>

</div>

</div>
<?php
echo	"<div class=\"modal-footer\">";
echo 	"<button type=\"reset\" class=\"btn btn-primary btn-default \" data-dismiss=\"modal\">";
echo 	"<span class=\"glyphicon glyphicon-remove\"></span> Cancel</button>";
		
echo 	"</div>";
echo 	"</div>";

?>
</body>


</html>
