<?php

include 'admin/dbconnect.php';

include 'admin/queries.php';

echo "<select class=\"form-control\" name=\"anmlID\" required>";
echo "<option value=\"\">Select Animal</option>";


$sql = $namesql ;

$result=mysqli_query($con,$sql);
if ($result === false) { echo "An error occurred."; }

while($rows=mysqli_fetch_array($result)){



echo "<option value=" . $rows['anmlid'] . ">" . $rows['anml_name'] ."</option>" ;


}


mysqli_close($con);

echo "</select>";

?>
