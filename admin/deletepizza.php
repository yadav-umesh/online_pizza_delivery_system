<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
$did=$_REQUEST['did'];
$sql1="delete from pizzamaster_tbl where fid='$did'";
mysqli_query($con,$sql1);
header("location:viewpizza.php");
?>
