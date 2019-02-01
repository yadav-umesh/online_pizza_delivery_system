
<?php
session_start();
include"config.php";
$msg="";
/*($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}*/
$did=$_REQUEST['did'];
$uname=$_SESSION['user_name'];
$uid=$_SESSION['user_id'];
$sql="select * from pizzamaster_tbl where fid='$did'";
$rs=mysqli_query($con,$sql);
$d=mysqli_fetch_array($rs);
$msg="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
$quan=$_POST['quan'];
$tprice=$_POST['pprice']*$quan;
$sql5="select curdate() as ab";
$rs5=mysqli_query($con,$sql5);
$d5=mysqli_fetch_array($rs5);
$date1=$d5['ab'];
$sql6="select curtime() as ac";
$rs6=mysqli_query($con,$sql6);
$d6=mysqli_fetch_array($rs6);
$time1=$d6['ac'];
$sql11="insert into booking_tbl values(NULL,'$uid','$did','$quan','$tprice','$date1','$time1')";
$n=mysqli_query($con,$sql11);
if($n)
{
	header("location:checkout.php?id=$did");
}


}

?>
<!DOCTYPE html>	
<style>
input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=time] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


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
<title>Online Pizza Delivery System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
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
      <h1>Online Pizza Delivery System</h1>
      <p>Delivery Panel</p>
    </div>
    <div class="fl_right"></div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php /* include "header.php";*/?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

  <div class="rounded">
    <main class="container clear"> 
	<div class="info" style="background-image:url(images/photos/5.jpg);height:auto;width:97.5%;padding:10px 10px 10px 10px;border-radius:10px 10px 10px 10px;font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;color:#000000;">
	
	
	
	
	<div id="info"  align="center"; style="width:auto; height:730px;  padding:10px; border:3px dotted black; margin-top:10px;margin-bottom:20px">
		<?php include "user_menu.php";?>
  <div id="user1" style="display:block;background-color:#CCCCCC; text-align: center;padding: 14px 16px;text-decoration: none;float:right">WELCOME USER:<?php echo $uname;?><br/>
  <a href="logout.php">LOG OUT</a></div>
  <br/><br/><br/><br/>
  
  
  
  <div align="center">
  <form action="" name="f1" method="post">
    <label for="fname">Pizza Name:</label>
    <input type="text" id="fname" name="pname" value="<?php echo $d['fname'];?>" readonly>
    <br/>
    <label for="lname">Pizza price:</label>
    <input type="text" id="lname" name="pprice" value="<?php echo $d['fprice'];?>" readonly>
    <br/>
 	<label for="lname">Quantity:</label>
    <input type="text" id="lname" name="quan" >
	
	
	  
    <input type="submit" value="Submit">
  </form>
  <div style="color:#FF0000"><?php echo $msg; ?></div>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Btech STUDENTS</a></p>
    <p class="fl_right">Developed By CIEM IT STUDENTS</a></p>
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