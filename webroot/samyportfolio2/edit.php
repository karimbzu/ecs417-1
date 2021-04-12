<?php
include 'config.php';
$id = $_GET['edid'];
$data = $conn->prepare("select * from post where id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $conn->exec("update post set title='$title',description='$description' where id='$id'");
    header("location:blog.php");
}
?>
<!DOCTYPE html>
<html>
<!-- Head part -->
<head>
    <!--    for title on top browser-->
    <title>Create</title>
    <!--    include external css to manage proper-->
    <link rel="stylesheet" href="style.css">
    <style>
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 6px 12px;
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }

        /*form section css*/
        .form-box {
            width: 40%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 0px 20px;
            border-radius: 5px;
            padding-bottom: 20px;
        }

        /*Input box css*/
        input {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .container {
            margin-top: 80px;

        }

        .back-button {
            background-color: #4CAF50;
            color: white;
            padding: 4px 8px;
            text-align: center;
            font-size: 16px;
            float: right;
            margin-right: 137px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="blog.php" class="back-button">Back</a>
    <!-- Start body parte -->
    <div class="form-box">
        <!-- black class for text black-->
        <h1 class="black">Edit</h1>
        <!-- Use Form tag and input types -->
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" value="<?php echo $row->title ?>">
            <textarea typeof="text" name="description"
                      placeholder="Description"><?php echo $row->description ?></textarea>
            <!-- Button for Submit form -->
            <button class="button" type="submit" name="save">Update</button>
        </form>
    </div>
</div>

</body>

