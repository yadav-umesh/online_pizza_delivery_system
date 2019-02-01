
<?php
session_start();
include "config.php";
$uname=$_SESSION['user_name'];
$uid=$_SESSION['user_id'];
$sql="select * from booking_tbl where rid=".$uid."";
$rs=mysqli_query($con,$sql);
?>
<!DOCTYPE html>	
<style>
button
{
	background-color:#F03;
	color:#FFF;
	cursor:pointer;
	font-family:Arial, Helvetica, sans-serif;
}
button:hover
{
	background-color:#06C;
}
</style>	
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>PizzaHome.com/Booking</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css1/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="css1/dataTables/dataTables.responsive.css" rel="stylesheet">

</head>
<body >

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ############################################################################################### -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ --> 
  </div>
</div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<div class="wrapper row1">
  <header id="header" class="clear"> 
  
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
  
      <h1><font color="#FF3300" size="22" face="Trebuchet MS, Arial, Helvetica, sans-serif"><i>PIZZAHOME.COM</i></font></h1>
      <p>Delivery Panel</p>
    </div>
    
    <div class="fl_right"></div>
    <!-- ################################################################################################ --> 
  </header>
  </div>
<!--<img src="foodp.png" height="40px" width="50px"/>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

  <div class="rounded">
    <main class="container clear"> 
    
	<div class="info" style="background-image:url(images/photos/5.jpg);height:auto;width:97.5%;padding:10px 10px 10px 10px;border-radius:10px 10px 10px 10px;font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;color:#000000;">
	
	
	
	
	<div id="info"  align="center"; style="width:auto; height:auto;  padding:10px; border:3px dotted black; margin-top:10px;margin-bottom:20px">
    
		
  <div id="user1" style="display:block;background-color:#CCCCCC; text-align: center;padding: 14px 16px;text-decoration: none;float:right"><font color="#0000CC" face="Comic Sans MS, cursive">HELLO &nbsp <?php echo $uname;?></font><br/>
  <a href="logout.php"><button>LOG OUT</button></a>
  </div>
  <br/><br/><br/><br/>
  
  
  
  <div align="center">
 
  <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                            <marquee behavior="alternate" scrollamount="16"><h1 class="page-header">
                            <font color="#080459" size="28"> YOUR BOOKING HISTORY</font></h1></marquee>
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover"  id="dataTables-example">

                                        <thead>
											<tr>
                                            <th>SL NO.</th>
                                                <th>USERNAME</th>
												<th>FOOD NAME</th>
                                                <!--<th>ADDRESS</th>-->
												<th>QUANTITY</th>
												<th>TOTAL PRICE</th>
                                               <th>DATE</th>
												<th>TIME</th>
                                                <!--<th>STATUS</th>-->
											
                                                
                                                
                                                
											</tr>
										</thead>
                                        <tbody>
                                            <?php 												 
                                                 $count=1;
                                             while($d=mysqli_fetch_array($rs))
                                             {
                                             ?>
                                            <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php $sql2="select * from registration_tbl where rid=".$uid."";
                                      $rs2=mysqli_query($con,$sql2);
									  $d2=mysqli_fetch_array($rs2);
									   echo $d2['ruser'];?></td>
   							
											<td><?php $sql1="select * from pizzamaster_tbl where fid=".$d['pid']."";
											$rs1=mysqli_query($con,$sql1);
											$d1=mysqli_fetch_array($rs1);
											 echo $d1['fname'];?></td>
                                             <!--<td><?php echo $d['address'];?></td>-->
											<td><?php echo $d['quan'];?></td>
											<td><?php echo $d['tprice'];?></td>
                                            <td><?php echo $d['date1'];?></td>
											<td><?php echo $d['time1'];?></td>
                                         
                                           
                                            </tr>
                                             <?php
											 $count++;
									  }
									  ?>
											
                                           
										</tbody>
									</table>
                                </div>
                            </div>    
                        </div>  
                    </div>
           </div>
  
</div>
  
  
  
  
  
</div>
	
	
	
	
	
	
	
	</div>
      
<div class="clear"></div>
    </main>
  </div>
</div>



<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.php">pizzahome.com</a></p>
    <p class="fl_right">Developed By makaut STUDENTS</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>