
<?php
session_start();
include"config.php";
$msg="";
/*($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}*/
$did=$_REQUEST['id'];
$uname=$_SESSION['user_name'];
$uid=$_SESSION['user_id'];
$sql="select quan,bid,tprice from booking_tbl order by bid desc";
$rs=mysqli_query($con,$sql);
$d=mysqli_fetch_array($rs);
$msg="";
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
		<?php include "user_menu1.php";?>
  <div id="user1" style="display:block;background-color:#CCCCCC; text-align: center;padding: 14px 16px;text-decoration: none;float:right">WELCOME USER:<?php echo $uname;?><br/>
  <a href="logout.php">LOG OUT</a></div>
  <br/><br/><br/><br/>
  
  
  
  <div align="center">
  <form action="" name="f1" method="post">
  <label for="lname">Booking ID:</label>
    <input type="text" id="lname" name="bid" value="<?php echo $d['bid'];?>"readonly>
    <br>
    <label for="fname">Pizza Name:</label>
    <input type="text" id="fname" name="pname" value="<?php $sql1="select fname from pizzamaster_tbl where fid='$did'";$n=mysqli_query($con,$sql1);$r=mysqli_fetch_array($n); echo $r['fname']?>" readonly>
    <br/>
    <label for="lname">Pizza price per Quantity:</label>
    <input type="text" id="lname" name="pprice" value="<?php  $sql2="select fprice from pizzamaster_tbl where fid='$did'";$n1=mysqli_query($con,$sql2);$r1=mysqli_fetch_array($n1);echo $r1['fprice'];?>" readonly>
    <br/>
 	<label for="lname">Quantity:</label>
    <input type="text" id="lname" name="quan" value="<?php echo $d['quan'];?>"readonly>
    <br>
    <label for="lname">Total Bill:</label>
    <input type="text" id="lname" name="tprice" value="<?php echo $d['tprice'];?>"readonly>
	  
    
    <a href="ordersucess.php?id=<?php $d['bid'];?>"><div style="width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 2px;
    border-radius:4px;
    height:15px;
    text-decoration:none
     ">Proceed to Pay</div></a>
     <br/>
    <a href="cancel.php ?id=<?php $d['bid'];?>"><div style="width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 2px;
    border-radius:4px;
    height:15px;
    text-decoration:none
     ">Cancel Order</div></a>
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