<?php
include "../../connection.php";
$id=$_GET["id"];
$link = mysqli_connect("localhost", "root", "", "online_quiz");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($link,"delete from exam_category where id=$id");
mysqli_close($link);
?>
<script type="text/javascript">
    window.location="exam_category.php";
</script>