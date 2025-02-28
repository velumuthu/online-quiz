<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="mailam-logo.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color: white;">
                    <h3>ADMIN LOGIN</h3>
                </div>
                <div class="login-form">
                    <form action="" name="form1" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Password" required>
                        </div>
                                <button type="submit" name="submit1" class="btn btn-success btn-login m-b-30 m-t-30">Sign in</button>
                                <div class="alert alert-warning" id="errormsg"style="margin-top: 9px; display:none;">
                                <strong>Invalid!</strong> Username (Or) Password!
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    $link = mysqli_connect("localhost", "root", "", "online_quiz");
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST["submit1"])){
        $count=0;
        $username=mysqli_real_escape_string($link,$_POST["username"]);
        $password=mysqli_real_escape_string($link,$_POST["password"]);
        $res=mysqli_query($link,"select * from admin where username='$username' && password='$password'");
        $count=mysqli_num_rows($res);
    if($count==0){
        ?>
        <script type="text/javascript">
            document.getElementById("errormsg").style.display="block";
        </script>
        <?php  
    }
    else{
        ?>
        <script type="text/javascript">
            window.location="admin.php";
            document.getElementById("errormsg").style.display="none";
        </script>
        <?php
    }
}
    ?>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
