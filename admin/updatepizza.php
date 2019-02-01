<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
$did=$_REQUEST['id'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fil=$_FILES['fil'];
	$pic=$fil['name'];
	$old=$fil['tmp_name'];
	$new="upload/".$pic;
	move_uploaded_file($old,$new);
    $fname=$_REQUEST['fname'];
	$catid=$_REQUEST['cid'];
    $fspec=$_REQUEST['fspec'];
    $fprice=$_REQUEST['fprice'];
	if($pic=="")
	{
		$sql1="update pizzamaster_tbl set fname='$fname',categoryid='$catid',fspec='$fspec',fprice='$fprice' where fid='$did'";
		mysqli_query($con,$sql1);
	}
	else
	{
		$sql1="update pizzamaster_tbl set fname='$fname',fpic='$pic',categoryid='$catid',fspec='$fspec',fprice='$fprice' where fid='$did'";
		mysqli_query($con,$sql1);
	}

}
$sql = "select * from pizzamaster_tbl where fid='".$did."'";
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
            
                        <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Update Pizza Details</h3>
                        	       </div>
                                   
  
          <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Name</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="fname" value="<?php echo $d['fname'];?>">
                 </div>
        </div>
         <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Category Id</strong></label>
                 <div class="controls">
                    <select id="selectError" name="cid"> 
                     
                    <?php
                        $sql="select * from category_tbl";
                        $rs=mysqli_query($con,$sql);
                        while($data=mysqli_fetch_array($rs))
                        {
                          ?>
                        <option value="<?php echo $data['categoryid'];?>">
                            <?php echo $data['categoryname'];?>
                        </option>
                        <?php
                        }
                        ?>
                        
                    </select>
                     
                    </div>
                </div>
		
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Pizza Image</strong></label>
                 <div class="controls">
                 <img src="upload/<?php echo $d['fpic'];?>"height="100" width="100" />
                 </div>
        </div>
        
        
         <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Update Picture</strong></label>
                 <div class="controls">
                   <input type="file" name="fil">
                 </div>
        </div>


        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Specification</strong></label>
                 <div class="controls">
                    <textarea name="fspec" id="inputError"><?php echo $d['fspec'];?></textarea>
                 </div>
        </div>
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Price</strong></label>
                 <div class="controls">
                    <input type="text" id="inputError" name="fprice" value="<?php echo $d['fprice'];?>">
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
