<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <?php
}
include "connection.php";
$link = mysqli_connect("localhost", "root", "", "online_quiz") or die(mysqli_error($link));
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Quiz System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="mailam-logo.png">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Select exam</a>
                                                    <ul class="dropdown-menu">
                                                        <?php
                                                        $res = mysqli_query($link, "select * from exam_category");
                                                        while ($row = mysqli_fetch_array($res)) {
                                                            ?>
                                                            <li><input type="button" class="btn btn-success form-control" value="<?php echo $row["category"]; ?>" onclick="set_exam_type_session(this.value)"></li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Last result</a></li>
                                                <li class="nav-item"><a href="login.php" class="nav-link">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/avatar-mini2.jpg" alt="" />
                                                        <span class="admin-name"><?php echo $_SESSION['username']; ?></span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="login.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
                                        <ul class="breadcome-menu">
                                            <li>
                                                <div id="countdown" style="font-size: 20px; color: red;"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 0px; padding: 0px; margin-bottom: 50px;">
    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
        <br>
        <div class="row">
            <br>
            <div class="col-lg-6 col-lg-push">
                <div id="current_que" style="float:left">0</div>
                <div style="float:left">/</div>
                <div id="total_que" style="float:left">0</div>
            </div>
            <div class="row" style="margin-top: 36px;">
                <div class="row">
                    <div class="col-lg-10 col-lg-push-1" style="min-height: 27px; background-color: white;" id="load_questions">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 9px">
                <div class="col-lg-6 col-lg-push-3">
                    <div class="col-lg-12 text-corner">
                        <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                        <input type="button" class="btn btn-success" value="Next" onclick="load_next();">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let question_no = 1;

    function load_total_que() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "forajax/load_total_que.php", true);
        xmlhttp.send(null);
    }

    function load_questions(question_no) {
        document.getElementById("current_que").innerHTML = question_no;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == "over") {
                } else {
                    document.getElementById("load_questions").innerHTML = xmlhttp.responseText;
                    load_total_que();
                }
            }
        };
        xmlhttp.open("GET", "forajax/load_questions.php?question_no=" + question_no, true);
        xmlhttp.send(null);
    }

    function load_previous() {
        if (question_no > 1) {
            question_no = parseInt(question_no) - 1;
            load_questions(question_no);
        }
    }

    function load_next() {
        question_no = parseInt(question_no) + 1; 
        load_questions(question_no); 
    }

    load_questions(question_no);
    load_total_que();
</script>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyrigts &copy; <?php echo date("Y"); ?> MEC. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function set_exam_type_session(exam_category) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    window.location = "client.php";
                }
            };
            xmlhttp.open("GET", "forajax/start_quiz.php?exam_category=" + exam_category, true);
            xmlhttp.send(null);
        }
    </script>

    <script type="text/javascript">
        setInterval(function() {
            timer();
        }, 1000);

        function timer() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var timeRemaining = xmlhttp.responseText;
                    document.getElementById("countdown").innerHTML = timeRemaining;

                    if (timeRemaining === "00:00:01") {
                        alert("Time's up!");
                        window.location = "result.php";
                    }
                }
            };
            xmlhttp.open("GET", "forajax/load_timer.php", true);
            xmlhttp.send(null);
        }
    </script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
