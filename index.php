<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>QAS MedDB</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

	 <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 <style>
	 body	{
	 	margin:10px;
	 	}
	 	</style>

</head>

<body>
<?php

date_default_timezone_set('America/New_York');

$dtest= date("d M y");

$dname=$_GET['dname'];

?>
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
  
                <a style="font-size:200%" class="" href="index.php"><i  class="fa fa-paw"></i> QAS MedDB</a>
            </div>

            <ul class="nav navbar-top-links navbar-right hidden-xs">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-wrench"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a data-toggle="modal" data-target="#admModal" onclick="loadadmDoc('./meds-admin/chartadd.php')">
                                <div>
                                    <i class="fa fa-list-alt"></i> New Chart
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a data-toggle="modal" data-target="#admModal" onclick="loadadmDoc('./meds-admin/addanml.php')">
                                <div>
                                    <i class="fa fa-list-alt"></i> New Patient
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                        
                            <a data-toggle="modal" data-target="#admModal" onclick="loadadmDoc('./meds-admin/iso-mgr.php')"> 
                                <div>
                                    <i class="fa fa-list-alt"></i>ISO Manager
                                </div>
                            </a>
                        </li>
                     
                    </ul>
                </li>
            
            </ul>

            <div style="padding-top:10px" class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav nav-pills nav-stacked hidden-xs" id="side-menu">
   
                        <li>
                            <a style="font-size:200%" 	class="btn btn-success" href="index.php"><i class="fa fa-home"></i> Main </a>
                        </li>
                        <li>
                            <a style="font-size:200%" class="btn btn-warning" onclick="loadnewDoc('results.php?dname=CAT')"><i class="fa fa-github"></i> Cats</a>
                        </li>
                        <li>
                            <a style="font-size:200%" class="btn btn-danger" onclick="loadnewDoc('results.php?dname=DOG')"><i class="fa fa-paw"></i> Dogs</a>
                        </li>
                        <li>
                            <a style="font-size:200%" class="btn btn-primary" onclick="loadnewDoc('results.php?dname=ISO')"><i class="fa fa-medkit"></i> ISO </a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

        <div id="page-wrapper">
        <div class="row">
        <div style="padding-top:10px" id="main">
<?

if( isset($dname))
	
	{ 
	 include "results.php";
	}   else   {
	include "main.php";
}
	

?>    

     </div>       
            <div class="row">
                <div class="col-lg-8 hidden-xs">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Observations
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div ></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                
                 
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4 hidden-xs">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                               
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                   
                </div>
            </div>
        </div>
        </div>

</div>

  <!-- ADM Modal -->
  <div class="modal fade" id="admModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">  		
         <div id="result"></div>
          
   
	
</div>

</div>
</div>


</body>

<script>
function admDoc($doseid, $dname) {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("result").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "cgi-bin/adm.php?doseid=" + $doseid + "&dname=" + $dname, true);
  xhttp.send();
}
</script>

<script>
function loadnewDoc($url) {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("main").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", $url , true);
  xhttp.send();
}

</script>

<script>
function loadadmDoc($url) {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("result").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", $url , true);
  xhttp.send();
}
</script>
<script>
function loadmoveDoc($anmlid, $movetype) {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("result").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "cgi-bin/isomove.php?anmlid=" + $anmlid + "&movetype=" + $movetype , true);
  xhttp.send();
}
</script>


</html>
