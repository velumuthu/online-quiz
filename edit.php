<?php
include "../connection.php";
$id=$_GET["id"];
$link = mysqli_connect("localhost", "root", "", "online_quiz");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
$res=mysqli_query($link,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $category=$row["category"];
    $exam_time_in_minutes=$row["exam_time_in_minutes"];
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" >ADMIN</a>
                <a class="navbar-brand hidden"><img src="" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="exam_category.php"> <i class="menu-icon fa fa-dashboard"></i>Add Exams</a>
                    </li>
                    <li>
                        <a href="add_question.php"> <i class="menu-icon fa fa-dashboard"></i>Add Questions</a>
                    </li>
                    <li>
                        <a href="page-login.php"> <i class="menu-icon fa fa-close"></i>Logout </a>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Exams</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                        <form action="" name="form1" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header"><strong>Edit Exams</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Edit Exam Category</label>
                                                <input type="text" name="category" id="category" placeholder="Please enter your exam name" class="form-control" value="<?php echo $category; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exam_time_in_minutes" class="form-control-label">Exam Times In Minutes</label>
                                                <input type="text" name="exam_time_in_minutes" id="exam_time_in_minutes" placeholder="Minutes format only" class="form-control" value="<?php echo $exam_time_in_minutes; ?>" required>
                                            </div>
                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <input type="submit" name="submit1" class="btn btn-success" value="Update Exam">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST["submit1"])){
    $link = mysqli_connect("localhost", "root", "", "online_quiz");
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $category=mysqli_real_escape_string($link,$_POST["category"]);
    $exam_time_in_minutes=mysqli_real_escape_string($link,$_POST["exam_time_in_minutes"]);
    mysqli_query($link,"update exam_category set category='$category', exam_time_in_minutes='$exam_time_in_minutes' where id=$id");
    ?>
    <script type="text/javascript">
        alert("Exam Updated Successfully");
        window.location="exam_category.php";
    </script>
    <?php
}
?>

<!-- Right Panel -->


        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></scr
        <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></scr
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>
</html>
