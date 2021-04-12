<?php

//criteria 6
include 'config.php'; //connect to database


if($_SERVER['REQUEST_METHOD'] == 'POST') // check if post is submmited
{
    $title=$_POST['title']; //taking title value in variable 
    $description = $_POST['description'];

    $dt = date('m/d/Y h:i:s', time()); //taking curent time and date


	//Store dataa in database
    $conn->exec("insert into post (title,description,date_time) value ('$title','$description','$dt')");
    header('location:blog.php');
}
else{
    echo "somthing wrong";
}
?>
