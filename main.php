<?php

include 'admin/dbconnect.php';

include 'admin/queries.php';


//Dog Count
$sql = $dogcount;


$result = mysqli_query($con,$sql);


if ($result === false) { echo "An error occurred."; }


$dognum = $result->fetch_object()->CT;
 
 
//Cat Count 
 $sql = $catcount;


$result = mysqli_query($con,$sql);


if ($result === false) { echo "An error occurred."; }


$catnum = $result->fetch_object()->CT;
 
//ISO Count 
 $sql = $isocount;


$result = mysqli_query($con,$sql);


if ($result === false) { echo "An error occurred."; }


$isonum = $result->fetch_object()->CT;

 mysqli_close($con);
 ?>      
       <div class="row">
                <div class="col-lg-4 col-md-6">
                 <a onclick="loadnewDoc('results.php?dname=ISO')">
                    <div class="panel panel-primary">
                    
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i  class="fa fa-5x fa-medkit"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">ISO <? echo $isonum ?></div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                     </a> 
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                     <a onclick="loadnewDoc('results.php?dname=DOG')">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i  class="fa fa-5x fa-paw"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Dogs <? echo $dognum ?></div>
                                </div>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                     <a onclick="loadnewDoc('results.php?dname=CAT')">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-5x fa-github"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Cats <? echo $catnum ?></div>
                                </div>
                            </div>
                        </div>
                       
                        </a>
                    </div>
                </div>
   
                </div>