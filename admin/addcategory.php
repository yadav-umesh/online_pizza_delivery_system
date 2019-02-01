<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$categoryname=$_REQUEST['name'];
	$sql="insert into category_tbl values(NULL,'$categoryname')";
	$n=mysqli_query($con,$sql);
}
?>

<!=======================================DOCTYPE html=============================================>

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
        
        
        
        
         <script type="text/javascript">
            
        </script>  
    </head>
    
    <body>

        <div id="wrapper">

                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
                
                
<!========================================Form=========================================================>           <br/>     
            
       <div id="page-wrapper">
    
           <div class="span10">
            
                        <form class="form-horizontal"  method="post">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Add Category</h3>
                        	       </div>
 <!========================================Form=========================================================>
 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Category Name</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
                 </div>
        </div>  
		
		 <!--<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact  Address</strong></label>
                 <div class="controls">
                    <textarea name="address" class="input-xlarge focused" id="focusedInput"></textarea>
                 </div>
        </div> 
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Email</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
                 </div>
        </div>                              
        
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Contact Phone No.</strong></label>
                 <div class="controls">
                    <input name="phone_no" type="text" class="input-xlarge focused" id="focusedInput" value="">
                 </div>
        </div>-->
		
	         
			 
			 
			 
			 
<!--Design for combo box-->			 
			 
			 <!--
			 <div class="control-group success">
              <label for="inputError" class="control-label"><strong>City</strong></label>
                 <div class="controls">
                    <select id="selectError" name="city"> 
                     
                    <?php
                /*        $sql="select * from city_master";
                        $rs=mysql_query($sql);
                        while($data=mysql_fetch_array($rs))
                        {
                          ?>
                        <option value="<?php echo $data['city_id'];?>">
                            <?php echo $data['city_name'];?>
                        </option>
                        <?php
                        }*/
                        ?>  
                        
                    </select>
                     
                        </div>
                
        </div>




-->
        <div class="form-actions">                    
        <button type="submit" class="btn btn-outline btn-success" onClick="return alert('DATA SAVED SUCCESSFULLY')">Save Data</button>                  
        
        <button type="submit" class="btn btn-outline btn-danger">Cancel</button>
            
            
        </div> 
<!======================================================================================================>
                              
            
            </fieldset>
            </form>
        </div>   
                
   </div>  
                       
<!======================================================================================================>            
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
