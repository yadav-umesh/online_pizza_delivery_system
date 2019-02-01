<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
$did=$_REQUEST['id'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$atitle=$_REQUEST['atitle'];
$adetails=$_REQUEST['adetails'];
$sql1="update about_tbl set atitle='$atitle',adetails='$adetails' where aid='$did'";
mysqli_query($con,$sql1);
}
$sql = "select * from about_tbl where aid='".$did."'";
$rs = mysqli_query($con,$sql);
$d = mysqli_fetch_array($rs);
?>

<!--=======================================DOCTYPE html=============================================-->

<html lang="en">
    <head><title>Admin Home Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content=""> 

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        
        
        
          
    </head>
    
    <body>

        <div id="wrapper">

                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
                
                
  <br/>     
            
       <div id="page-wrapper">
    
           <div class="span10">
            
                        <form class="form-horizontal"  method="post">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Update About Details</h3>
                        	       </div>
  
          <div class="control-group success">
              <label class="control-label" for="inputError"><strong>About TITLE</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="atitle" value="<?php echo $d['atitle'];?>">
                 </div>
        </div>

        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>ABOUT DETAILS</strong></label>
                 <div class="controls">
                    <textarea name="adetails" id="inputError"><?php echo $d['adetails'];?></textarea>
                 </div>
        </div>
		
		

      
        <div class="form-actions">                    
        <button type="submit" class="btn btn-success">Update Data</button>                  
        
        <button type="submit" class="btn btn-danger">Cancel</button>
            
            
        </div>                               
            
            </fieldset>
            </form>
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

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
