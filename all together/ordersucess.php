
<?php
session_start();
include"config.php";
$uname=$_SESSION['user_name'];
$uid=$_SESSION['user_id'];

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
    width: 60%;
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
  <a href="bkhistory.php"><button>BOOKING HISTORY</button></a></div>
  <br/><br/><br/><br/>
  
  
  
  <div align="center">
 
  
	<marquee behavior="alternate" scrollamount="15"><h4><font color="#003399" size="38">Successfully Paid and Ordered</font></h4></marquee>
    <h5>We will deliver your order very soon.Delivery-boy will contact you on your registered mobile number.Please pay the amount of your order in cash at the time of delivery.</h5>
    <h6><font color="#FF0000">You can check your order status on booking history.<br/>Thanks for booking on PizzaHome.com</font></h6>
	
	  
    
  </form>
  
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
    <p class="fl_right">Developed By MAKAUT STUDENTS</a></p>
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