<!--<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>


<body>


<div class="jumbotron hidden-xs">
<p>New Patients can be added here</p>
</div>
-->
<?php
echo	"<div class=\"modal-header\">";
echo	"<button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>";
echo	"<h4> Add New Patient</h4>";
echo	"</div>";

echo	"<div class=\"modal-body\">";
echo	"<form role=\"form\"  action=\"cgi-bin/newanml.php\" method=\"post\">";
echo	"<div class=\"form-group\">";

echo "<table class=\"table table-striped table-bordered\">";

?>


<tr>

<td><b>QAS ID:</b> </td>
<td><input class="form-control" type="text" name="anmlid"></td>

</tr>

<tr>

<td><b>Name:</b></td>
<td><input class="form-control"  type="text" name="anml_name"></td>




</tr>

<tr>
<div class="form-group">
<td><b>Dog or Cat:</b></td>

<td> 

<input type="radio" name="type" value="C">Cat
<input type="radio" name="type" value="D">Dog

</td>

</div>
</tr>


<tr>
<td><b>ISO?</b></td>

<td>
<input type="radio" name="iso" value="N" checked="checked">No
<input type="radio" name="iso" value="Y">Yes

</td>

</tr>


</table>


  <button type="submit" class="btn btn-primary btn-default ">
          <span class="glyphicon glyphicon-check"></span> OK
        </button>
        <button type="reset" class="btn btn-primary btn-default " data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
</div>
<!--
</body>
</html>
-->