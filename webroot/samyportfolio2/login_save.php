<?php$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//Criteria 3 ******
//check is submkitted from login.php or not
if(isset($_POST['submit'])){
    include 'config.php';  // I make config.php for connect to database
    $email=$_POST['email'];  // i am taking submit email in variable
    $password=$_POST['password']; // same here

    ////Query to check email and password match to our database
    $data=$conn->prepare("select * from login where email='$email' and password='$password'");
    $data->execute();
    $result=$data->fetch(PDO::FETCH_OBJ);
    if($result){
        //Crteria 4 start session
        session_start(); // start session 
        $_SESSION['islogin']=1; // i saved islogin = 1
        header("location:blog.php");
    }
    else{
        header("location:login.php");
    }
}
?>