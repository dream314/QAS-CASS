<?php

//include 'admin/dbconnect.php';

include 'admin/queries.php';

echo "<select class=\"form-control\" name=\"volid\" required>";
echo "<option value=\"\">Select Name</option>";


$sql = $volsql ;

$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){



echo "<option value=" . $rows['volid'] . ">" . $rows['lastname'] . ", ". $rows['firstname'] . "</option>" ;



}

echo "</select>";

//mysqli_close($con);
?>