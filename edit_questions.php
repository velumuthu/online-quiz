<?php
include "../../connection.php";
$id=$_GET["id"];
$link = mysqli_connect("localhost","root","","online_quiz");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
$question="";
$option1="";
$option2="";
$option3="";
$option4="";
$answer="";
$res=mysqli_query($link,"SELECT * FROM questions WHERE id=$id");
while($row=mysqli_fetch_array($res))
{
    $question=$row["question"];
    $option1=$row["opt1"];
    $option2=$row["opt2"];
    $option3=$row["opt3"];
    $option4=$row["opt4"];
    $answer=$row["answer"];
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
                <a class="navbar-brand">ADMIN</a>
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
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

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
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User  Avatar">
                        </a>
                    </div>
                </div>
            </div>
        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update The Questions</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="col-lg-12">
                                    <form name="form1" action="" method="post">
                                    <div class="card">
                                        <div class="card-header"><strong>Edit Question</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Question</label>
                                                <input type="text" name="question" placeholder="Write the question" class="form-control" value="<?php echo $question; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 1</label>
                                                <input type="text" name="option1" placeholder="Option 1" class="form-control" value="<?php echo $option1; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 2</label>
                                                <input type="text" name="option2" placeholder="Option 2" class="form-control" value="<?php echo $option2; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 3</label>
                                                <input type="text" name="option3" placeholder="Option 3" class="form-control" value="<?php echo $option3; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 4</label>
                                                <input type="text" name="option4" placeholder="Option 4" class="form-control" value="<?php echo $option4; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Answer</label>
                                                <input type="text" name="answer" placeholder="Provide the answer" class="form-control" value="<?php echo $answer; ?>">
                                            </div>
                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <input type="submit" name="submit2" class="btn btn-success" value="Update Question">
                                            </div>
                                        </div>
                                    </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-->                    
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
<?php
if(isset($_POST["submit2"])){
    $question=mysqli_real_escape_string($link,$_POST["question"]);
    $option1=mysqli_real_escape_string($link,$_POST["option1"]);
    $option2=mysqli_real_escape_string($link,$_POST["option2"]);
    $option3=mysqli_real_escape_string($link,$_POST["option3"]);
    $option4=mysqli_real_escape_string($link,$_POST["option4"]);
    $answer=mysqli_real_escape_string($link,$_POST["answer"]);
    mysqli_query($link,"UPDATE questions SET question='$question', opt1='$option1', opt2='$option2', opt3='$option3', opt4='$option4', answer='$answer' WHERE id=$id");
    ?>
    <script type="text/javascript">
        alert("Question Updated Successfully");
        window.location="add_question.php";
    </script>
    <?php
}
?>

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>
</html>