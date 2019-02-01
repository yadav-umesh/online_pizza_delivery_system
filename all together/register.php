<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

	$did=$_REQUEST['id'];
	include "config.php";
	$msg="";
		
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		$first_name=$_REQUEST['first_name'];
		$last_name=$_REQUEST['last_name'];
		$user_name=$_REQUEST['user_name'];
		$password=$_REQUEST['password'];
		$address=$_REQUEST['address'];	
		$phone=$_REQUEST['phn_no'];
		$email=$_REQUEST['email_id'];
		$sql1="select * from registration_tbl where ruser='$user_name'";
        $rs=mysqli_query($con,$sql1);
        $n=mysqli_num_rows($rs);
        if($n>0)
        {
       $msg="user name already exist..";
       }
      else
      {
$sql="insert into registration_tbl values (NULL,'".$first_name."','".$last_name."','".$user_name."','".$password."','$phone','$email','$address')";
	
		mysqli_query($con,$sql);
        header("location:login.php?id=$did");   
       
		}

		
		
		
		$msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>";
	}
?>

<script>
 function validate()
      {
      
         if( document.form1.first_name.value == "" )
         {
            alert( "Please provide first  name!" );
            document.form1.first_name.focus() ;
            return false;
         }
		 if( document.form1.last_name.value == "" )
         {
            alert( "Please provide last name!" );
            document.form1.last_name.focus() ;
            return false;
         }
		 if( document.form1.user_name.value == "" )
         {
            alert( "Please provide user name!" );
            document.form1.user_name.focus() ;
            return false;
         }
		 if( document.form1.password.value == "" )
         {
            alert( "Please provide password!" );
            document.form1.password.focus() ;
            return false;
         }
		 if( document.form1.phn_no.value == "" ||
         isNaN( document.form1.phn_no.value ) ||
         document.form1.phn_no.value.length != 10 )
         {
            alert( "Please provide a Mobile number in the format ##########." );
            document.form1.phn_no.focus() ;
            return false;
         }
		 var emailID = document.form1.email_id.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.form1.email_id.focus() ;
            return false;
         }
		  if( document.form1.address.value == "" )
         {
            alert( "Please provide your Address!" );
            document.form1.address.focus() ;
            return false;
         }
		 


		 
		 
		
         return( true );
      }
   
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<div id="info"  align="center"; style="width:833px; height:700px;  padding:10px; border:3px dotted black; margin-top:30px">
			<h1>REGISTRATION PAGE</h1>
		<form name="form1" method="post" action="" onSubmit="return(validate());">
        	<table border="0" height="300px" align="center">
            
                <tr>
                <td><h2>First Name</h2></td>
                <td>:</td>
                <td><input type="text" name="first_name" id="first_name" /></td>
                </tr>
				<tr>
				<td><h2>Last Name</h2></td>
				<td>:</td>
				<td><input tyoe="text" name="last_name" id="last_name" /></td>
				</tr>
				<tr>
				<td><h2>User Name</h2></td>
				<td>:</td>
				<td><input type="text" name="user_name" id="user-name" /></td>
				</tr>
				<tr>
				<td><h2>Password</h2></td>
				<td>:</td>
				<td><input type="password" name="password" id="password" /></td>
				</tr>
                <tr>
                <td><h2>Phone</h2></td>
                <td>:</td>
                <td><input type="text" name="phn_no" id="phn_no" /></td>
                </tr>
                  <tr>
                <td><h2>email</h2></td>
                <td>:</td>
                <td><input type="text" name="email_id" id="email_id" /></td>
                </tr>
                <tr>

                <tr>
                <td><h2>Address</h2></td>
                <td>:</td>
                <td><textarea name="address" id="address"></textarea></td>
                </tr>
                                <td> <input type="submit" name="s1" value="Submit"/></td>
                <td>:</td>
                <td><input type="reset" name="s2"/></td>
                </tr>
            
            </table>
        
        
	  </form>
     			
			
		</div>
		<div style="width:100%; height:14px; clear:both;"></div>
</body>
</html>