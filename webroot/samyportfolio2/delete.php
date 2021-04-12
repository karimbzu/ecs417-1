<?php
include'config.php';
$id=$_GET['delid'];
$conn->exec("delete from post where id='$id'");
header("location:blog.php");

?>