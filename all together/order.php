<?php
include "config.php";
$did=$_REQUEST['id'];
$sql="delete from booking_tbl where bid='$did'";
$n=mysqli_query($con,$sql);
if($n)
{
	header("location:pizza_detail.php");
}
?>