<?php
session_start();
include "./connection.php";
$link = mysqli_connect("localhost", "root", "", "online_quiz") or die(mysqli_error($link));
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="mailam-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="error-pagewrap" style="background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(1, 67, 40, 0.75)), url(college.jpg); no-repeat fixed;background-size:cover;">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login" style="margin-bottom:9px;">
                <img src="mailam-logo-2.png" alt="Mailam Engineering College" style="width: 90%;height: 54px;margin-bottom: 27px;color:white;">
                <h3 style="color:white;">Login form</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body" style="background-color:rgba(0,0,0,0.1);backdrop-filter:blur(9px);border-radius:9px;">
                        <form action="login.php" name="form1" method="post">
                            <div class="form-group" style="color:white;">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);">
                            </div>
                            <div class="form-group" style="color:white;">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Enter your password" required="" value="" name="password" id="password" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);">
                            </div>


                            <div style="display:flex;flex-direction:column;align-items:center;">
                                <button type="submit" name="login" class="btn btn-success" style="padding:11px; margin:9px;border-radius:9px;font-weight:bold;width:45%;">Login</button>
                                <div class="col-lg-9" style="display: flex; justify-content: center; align-items: center; flex-direction: row; gap: 9px;">
                                <p class="already-account" style="font-weight:bold;margin-top:9px;color:white;">Don't have account?</p>
                                <a class="btn btn-success" href="register.php" style="border:blue;border-radius:9px;padding:11px;width:45%;">Register</a>
                            </div>
                            <div class="alert alert-danger" id="not-success" style="margin-top: 9px; display:none;">
                                <strong>Does not match!</strong> Username (Or) Password mismatch!
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
            <div class="admin-link" style="display:flex;justify-content:center;align-items:center;">
            <a href="http://localhost/online-quiz/admin/page-login.php" style="color:white; margin-top:9px; text-decoration: underline;">Admin login</a>
            </div>
		</div>   
    </div>
    <?php
    if(isset($_POST["login"])) 
    {
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");
        $count=mysqli_num_rows($res);

        if($count==0){
            ?>
            <script type="text/javascript">
               document.getElementById("not-success").style.display="block";
            </script>
            <?php
        }
        else{
            $_SESSION["username"]=$_POST["username"];
            
            ?>
            <script>
                window.location = "client.php";
                document.getElementById("not-success").style.display="none";
            </script>
            <?php
        }
    }

    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>


</body>

</html>