<?php
include("config.php");
$msg = "";

/*================== CODE FOR CHECKING THE USERNAME AND PASSWORD ======================*/
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    
    $sql = "select * from login_tbl where username = '".$username."' and password = '".$password."'";
    //echo $sql;exit();
    $rs = mysqli_query($con,$sql);
    $n = mysqli_num_rows($rs);
    $data = mysqli_fetch_array($rs);
    
    if($n==0){
        $msg = "Sorry! Invalid Username or Password";
    }
    else
	{
        $_SESSION["is_login"] = "true";
        $_SESSION["displayname"] = $data['username'];
        header("location:home.php");
    }
}
/*================== CODE FOR CHECKING THE USERNAME AND PASSWORD ======================*/
?>




<!DOCTYPE html>
<html lang="en">
    <head> <title><?php echo SITE_TITLE;?> Login</title>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
       
		
		
        
    </head>
    
    <body>

        <div class="container"><br/><br/><br/>
            <h1 style="text-align:center;"><b>Online Pizza Delivery Portal</b></h1>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title"><b>Please Sign In</b></h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" name="frm" action="" method="post">
                                <fieldset>
                                    <div class="form-group">
                
                   <input type="text" class="form-control" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    
                               <!--     <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                -->    
                                    <!-- Change this to a button or input when using this as a form -->
                               <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Sign In</a> -->
                         <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button> 
                                    <h5 style="color:#FF0000;"><?php echo $msg; ?></h5>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
