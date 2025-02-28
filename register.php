
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
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
       <link rel="stylesheet" href="css1\form.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body position="fixed">
    <div class="error-pagewrap" style="background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(11, 45, 32, 0.75)), url(college.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="error-page-int">
            <div class="text-center" style="color:white;">
            <img src="mailam-logo-2.png" alt="Mailam Engineering College" style="width: 90%;height: 54px;margin-bottom: 9px;">
				<h3>Create your free account</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body" style="padding: 9px;background-color:rgba(0,0,0,0.1);backdrop-filter:blur(27px);border-radius:9px 9px 9px 9px;">
                        <form action="" name="form1" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12" style="color:white;" >
                                    <label>FirstName</label>
                                    <input type="text" name="firstname" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" placeholder="Ex: VELU M" required>
                                </div>
                                <div class="form-group col-lg-4" style="color:white;">
                                    <label>Year</label>
                                    <select name="year" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" required>
                                        <option value="1" style="background-color:grey;">1st Year</option>
                                        <option value="2" style="background-color:grey;">2nd Year</option>
                                        <option value="3" style="background-color:grey;">3rd Year</option>
                                        <option value="4" style="background-color:grey;">4th Year</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4" style="color:white;" >
                                    <label>Section</label>
                                    <select type="text" name="section" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" required>
                                        <option value="A" style="background-color:grey;">A</option>
                                        <option value="B" style="background-color:grey;">B</option>
                                        <option value="C" style="background-color:grey;">C</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4" style="color:white;" >
                                    <label>Department</label>
                                    <select type="text" name="department" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" required>
                                        <option value="CSE" style="background-color:grey;">CSE</option>
                                        <option value="IT" style="background-color:grey;">IT</option>
                                        <option value="ECE" style="background-color:grey;">ECE</option>
                                        <option value="EEE" style="background-color:grey;">EEE</option>
                                        <option value="MECH" style="background-color:grey;">MECH</option>
                                        <option value="CIVIL" style="background-color:grey;">CIVIL</option>
                                        <option value="CSBS" style="background-color:grey;">CSBS</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12" style="color:white;" >
                                    <label>Username</label>
                                    <input type="number" name="username" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" placeholder="Enter your registration number" required>
                                </div>
                                <div class="form-group col-lg-12" style="color:white;" >
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" placeholder="DOB in dd-mm-yyyy format" required>
                                </div>
                                <div class="form-group col-lg-12" style="color:white;" >
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" placeholder="Enter your mailam mail id" required>
                                </div>
                                <div class="form-group col-lg-12" style="color:white;" >
                                    <label>Contact</label>
                                    <input type="number" name="contact" class="form-control" style="border-radius:9px;background-color:rgba(0,0,0,0.1);" placeholder=" Enter your contact number" required>
                                </div>
                            </div>
                            <div class="text-center" style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
                                <button type="submit" name="submit1" class="btn btn-success login" style="padding:11px; margin:3px;border-radius:9px;font-weight:bold;width:45%;">Register</button>
                                <div style="display: flex; justify-content: space-between; align-items: center; flex-direction: row; gap: 9px;margin-right:54px;">
                                    <p class="already-account" style="font-weight:bold; color:white;">Already have an account?</p>
                                    <a class="btn btn-success login" style="border:blue; border-radius:9px; padding:11px; width:27%;" href="login.php">Login</a>
                                </div>
                            </div>

                            <div class="alert alert-success" id="success"style="margin-top: 9px; display:none;border-radius:9px;">
                                <strong>Success!</strong>Registered successfully!
                            </div>
                            <div class="alert alert-danger" id="not-success"style="margin-top: 9px; display:none;border-radius:9px;">
                                <strong>Warning!</strong> Account already exists!
                            </div>

                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

    <?php
    $link = mysqli_connect("localhost", "root", "", "online_quiz");
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST["submit1"])) 
    {
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]'") or die (mysqli_error($link));
        $count=mysqli_num_rows($res);

        if($count>0)
        {
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display="none";
                document.getElementById("not-success").style.display="block";
            </script>
            <?php
        }
        else
        {
            mysqli_query($link,"insert into registration (id, firstname, year, section,department, username, password, email, contact) values (NULL, '$_POST[firstname]','$_POST[year]','$_POST[section]','$_POST[department]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')") or die (mysqli_error($link));
            ?>
          
          <script type="text/javascript">
                document.getElementById("not-success").style.display="none";
                document.getElementById("success").style.display="block";
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
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>