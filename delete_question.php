<?php
include "../../connection.php";
$id=$_GET["id"];
$link = mysqli_connect("localhost", "root", "", "online_quiz");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($link,"delete from questions where id=$id");
mysqli_close($link);
?>
<script type="text/javascript">
    window.location="add_question.php";
</script>