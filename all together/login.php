<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  session_start();
   include("config.php");
   $did=$_REQUEST['id'];
   ?>
<head>
<?php
    $msg="";
    if($_SERVER["REQUEST_METHOD"]=="POST") 
	{
					$uname=$_REQUEST['uname'];					  
					$pass=$_REQUEST['psw'];					 
					
					$sql="SELECT * FROM `registration_tbl` WHERE `ruser`='$uname' AND `rpassword`='$pass'";
					$rs=mysqli_query($con,$sql);
					$n= mysqli_num_rows($rs);
					if($n == '1')
					{			
												$data=mysqli_fetch_array($rs);
												$_SESSION["is_login"] = "true";
												$_SESSION['user_id']= $data['rid'];
												$_SESSION['user_name']= $data['ruser'];
											
                                               
						header("location:booking.php?did=$did");						
					}
					else
					{
					$msg="EMAIL ID OR PASSWORD IS WRONG";
                    }
    }
    
    
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Transparent Login Form Design</title>
   <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<div class="login-box">
<img src="login/mario.png" class="mario" />
<br />
<h1>Login Here</h1>
   <form method="post">
   <p>Username</p>
   <input type="text" name="uname" placeholder="Username" />
   <p>Password</p>
   <input type="password" name="psw" placeholder="Enter Password" />
   <input type="submit" name="submit" value="login">
   New User?Then
   <br />
   <br/>
   <a href="register.php?id=<?php echo $did;?>">REGISTER NOW</a>
   </form>
</div>
</body>
</html>