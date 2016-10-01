<!DOCTYPE html>

<html>
<head>
<!--
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
-->

</head>

<body>

<?php
echo	"<div class=\"modal-header\">";
echo	"<button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>";
echo	"<h4> Add New Chart<span class=\"glyphicon glyphicon-check\"></span></h4>";
echo	"</div>";

echo	"<div class=\"modal-body\">";
?>

<form action="cgi-bin/crchart.php" method="post">

<table class="table table-striped table-bordered"  >

<tr>

<td>
<b>Animal:</b>
</td>

<td>

<?php include '../namelist.php'; ?>

</td>

</tr>

<tr>

<td>
<b>Medication:</b>
</td>

<td>


<?php include '../medslist.php'; ?>


</td>

</tr>



<tr>

<td><b>Dose:</b></td><td> <input class="form-control" type="text" name="dosage" required></td>

</tr>

<tr>

<td><b>Start Date:</b></td><td> <input class="form-control" type="date"   name="sdate" required></td>

</tr>

<tr>

<td><b>End Date:</b></td><td> <input type="date" class="form-control"  name="edate" required></td>

</tr>


<tr>

<td><b>Frequency:</b></td>

<td> <select class="form-control" name="tod" required>
<option>Select Frequency</option>

<option value="ao">AM Only</option>
<option value="po">PM Only</option>
<option value="ap">AM & PM</option>
</select></td>

</tr>

<tr>

<td><b>Notes:</b></td>

<td> <textarea class="form-control" name="dosenotes">
</textarea>

</td>

</tr>
</table>


  <button type="submit" class="btn btn-primary btn-default ">
          <span class="glyphicon glyphicon-check"></span> OK
        </button>
        <button type="reset" class="btn btn-primary btn-default " data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
</form>

</body>
</html>
