<?php
include "../connection.php";
$id=$_GET["id"];
$link = mysqli_connect("localhost", "root", "", "online_quiz");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
$category = '';
$res=mysqli_query($link,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $category=$row["category"];
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
            <div class="col-sm-9">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add & Edit Questions Inside <?php echo "<font color=\"green\"> $category </font>"; ?> </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12" style="width: 100%;">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-6">
                                    <form name="form1" action="" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header"><strong>Add Questions</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Questions</label>
                                                <input type="text" name="question" placeholder="Write the question" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 1</label>
                                                <input type="text" name="option1" placeholder="Option 1" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 2</label>
                                                <input type="text" name="option2" placeholder="Option 2" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 3</label>
                                                <input type="text" name="option3" placeholder="Option 3" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Option 4</label>
                                                <input type="text" name="option4" placeholder="Option 4" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-control-label">Answer</label>
                                                <input type="text" name="answer" placeholder="Provide the answer" class="form-control" >
                                            </div>
                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <input type="submit" name="submit1" class="btn btn-success" value="Add Question">
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header"><strong>Add Questions</strong></div>
                                            <div class="card-body card-block">
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Questions</label>
                                                    <input type="file" name="fquestion" placeholder="Add the question" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Option 1</label>
                                                    <input type="file" name="foption1" placeholder="Option 1" class="form-control" style="padding-bottom: 45px;">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Option 2</label>
                                                    <input type="file" name="foption2" placeholder="Option 2" class="form-control" style="padding-bottom: 45px;">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Option 3</label>
                                                    <input type="file" name="foption3" placeholder="Option 3" class="form-control" style="padding-bottom: 45px;">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Option 4</label>
                                                    <input type="file" name="foption4" placeholder="Option 4" class="form-control" style="padding-bottom: 45px;">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="form-control-label">Answer</label>
                                                    <input type="file" name="fanswer" placeholder="Provide the answer" class="form-control" style="padding-bottom: 45px;">
                                                </div>
                                                <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                    <input type="submit" name="submit2" class="btn btn-success" value="Add Question">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-->  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header"><strong>Questions</strong></div>
                                    <div class="card-body card-block">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Q.No</th>
                                                    <th scope="col">Question</th>
                                                    <th scope="col">Option 1</th>
                                                    <th scope="col">Option 2</th>
                                                    <th scope="col">Option 3</th>
                                                    <th scope="col">Option 4</th>
                                                    <th scope="col">Answer</th>
                                                    <th scope="col">Exam</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $res=mysqli_query($link,"select * from questions where category='$category' order by id asc");
                                                while($row=mysqli_fetch_array($res)) {
                                                    echo "<tr>";
                                                    echo "<td>"; echo $row["question_no"]; echo "</td>";
                                                    if(isset($row["question"]) && strpos($row["question"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["question"]."' width='45px' height='45px'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo isset($row["question"]) ? $row["question"] : ''; echo "</td>";
                                                    }
                                                    if(strpos($row["opt1"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["opt1"]."' width='45px' height='45xpx'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo $row["opt1"]; echo "</td>";
                                                    }
                                                    if(strpos($row["opt2"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["opt2"]."' width='45px' height='45xpx'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo $row["opt2"]; echo "</td>";
                                                    }
                                                    if(strpos($row["opt3"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["opt3"]."' width='45px' height='45xpx'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo $row["opt3"]; echo "</td>";
                                                    }
                                                    if(strpos($row["opt4"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["opt4"]."' width='45px' height='45xpx'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo $row["opt4"]; echo "</td>";
                                                    }
                                                    if(strpos($row["answer"],"opt_images/")!==false){
                                                        echo "<td>"; echo "<img src='".$row["answer"]."' width='45px' height='45xpx'>"; echo "</td>";
                                                    }
                                                    else{
                                                        echo "<td>"; echo $row["answer"]; echo "</td>";
                                                    }
                                                    echo "<td>"; echo $row["category"]; echo "</td>";
                                                    echo "<td>";
                                                    if(strpos ($row["opt1"],"opt_images/")!==false || strpos ($row["opt2"],"opt_images/")!==false || strpos ($row["opt3"],"opt_images/")!==false || strpos ($row["opt4"],"opt_images/")!==false || strpos ($row["answer"],"opt_images/")!==false){
                                                        ?>
                                                        <a href="edit_image_options.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                        <a href="edit_questions.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                                        <?php
                                                    }
                                                    echo "</td>";
                                                    echo "<td>";
                                                    ?>
                                                    <a href="delete_question.php?id=<?php echo $row["id"]; ?>">Delete</a>
                                                    <?php
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->

<?php
if(isset($_POST["submit1"])){
    $link = mysqli_connect("localhost", "root", "", "online_quiz");
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $loop=0;
    $count=0;
    $res=mysqli_query($link,"select * from questions where category='$category' order by id asc") or die (mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0){
        $loop=1;
    }
    else{
    while($row=mysqli_fetch_array($res))
    {
        $loop=$loop+1;
        mysqli_query($link,"update questions set question_no=$loop where id=$row[id]");
    }
    $loop=$loop+1;
    }
    mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[answer]','$category')");
    ?>
    <script type="text/javascript">
        alert("Question Added Successfully");
    </script>
    <?php
}

if(isset($_POST["submit2"])){
    $link = mysqli_connect("localhost", "root", "", "online_quiz");
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $loop=0;
    $count=0;
    $res=mysqli_query($link,"select * from questions where category='$category' order by id asc") or die (mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0){
        $loop=1;
    }
    else{
        while($row=mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($link,"update questions set question_no=$loop where id=$row[id]");
        }
        $loop=$loop+1;
    }

    $tm=md5(time());

    $fnm1=$_FILES["fquestion"]["name"];
    $dst1="./opt_images/".$tm.$fnm1;
    $dst_db1="opt_images/".$tm.$fnm1;
    move_uploaded_file($_FILES["fquestion"]["tmp_name"],$dst1);

    $fnm2=$_FILES["foption1"]["name"];
    $dst2="./opt_images/".$tm.$fnm2;
    $dst_db2="opt_images/".$tm.$fnm2;
    move_uploaded_file($_FILES["foption1"]["tmp_name"],$dst2);

    $fnm3=$_FILES["foption2"]["name"];
    $dst3="./opt_images/".$tm.$fnm3;
    $dst_db3="opt_images/".$tm.$fnm3;
    move_uploaded_file($_FILES["foption2"]["tmp_name"],$dst3);

    $fnm4=$_FILES["foption3"]["name"];
    $dst4="./opt_images/".$tm.$fnm4;
    $dst_db4="opt_images/".$tm.$fnm4;
    move_uploaded_file($_FILES["foption3"]["tmp_name"],$dst4);

    $fnm5=$_FILES["foption4"]["name"];
    $dst5="./opt_images/".$tm.$fnm5;
    $dst_db5="opt_images/".$tm.$fnm5;
    move_uploaded_file($_FILES["foption4"]["tmp_name"],$dst5);

    $fnm6=$_FILES["fanswer"]["name"];
    $dst6="./opt_images/".$tm.$fnm6;
    $dst_db6="opt_images/".$tm.$fnm6;
    move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst6);

    mysqli_query($link,"insert into questions values(NULL,'$loop','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$dst_db6','$category')");

    ?>
    <script type="text/javascript">
        alert("Question Added Successfully");
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