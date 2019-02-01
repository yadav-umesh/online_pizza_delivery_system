<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <!-- Bootstrap -->
        <!-- Bootstrap Core CSS -->
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>   
                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
       
       
       <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">               
<marquee behavior="alternate" scrollamount="16">   <h1 class="page-header">VIEW BOOKING DETAILS</h1></marquee>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
       
       
       
       <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                            <div class="panel-body">
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
											$sql="select * from booking_tbl ";
											$rs=mysqli_query($con,$sql);  												 
                                                 $count=1;
                                             while($d=mysqli_fetch_array($rs))
                                             {
                                             ?>
                                            <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php $sql2="select * from registration_tbl where rid=".$d['rid']."";
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
						
										</thead>
                                        <tbody>
                            
											
                                           
										</tbody>
									</table>
                                </div>
                            </div>    
                        </div>  
                    </div>
           </div>
       </div>
                                    
           
           
               
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        

    </body>

</html>