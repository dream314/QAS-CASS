<?php

include 'admin/dbconnect.php';

include 'admin/queries.php';

echo "<select class=\"form-control\" name=\"medID\" required>";
echo "<option value=\"\">Select Medication</option>";


$sql = $medsql ;

$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){



echo "<option value=" . $rows['MEDID'] . ">" . $rows['MEDNAME'] ."</option>" ;


}

echo "</select>";

mysqli_close($con);
?>
