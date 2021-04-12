<?php
// this file for connect to database
$hostname="localhost"; //my server is localhost
$dbname="samy_db"; // database name
$username="root"; // database login name
$password=""; // no password

try {
	//trying to connect databvase
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
    //echo "succesfull";
}
catch(PDOException $e)
{
	//if any error then use catch
   echo $e->getMessage();
}

?>