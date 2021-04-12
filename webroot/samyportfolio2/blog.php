<?php include'config.php';

//Crietera 7
//here i am geting latest post first using order by datetime in desc order
$data=$conn->prepare("select * from post order by date_time desc");
$data->execute();
$result=$data->fetchall(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        table, td, th {
            border: 1px solid black;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto;
            margin-top: 20px;
        }

        h2 {
            margin-left: 135px;;
        }
        .container {
            margin-top: 50px;
        }
        .add-button {
            background-color: #4CAF50;
            color: white;
            padding: 4px 8px;
            text-align: center;
            font-size: 16px;
            float: right;
            margin-right: 137px;
            text-decoration: none;
        }
        .edit-button {
            background-color: #0d10af;
            color: white;
            padding: 4px 8px;
            text-align: center;
            font-size: 16px;
            float: right;
            margin-right: 137px;
            text-decoration: none;
        }
        .delete-button {
            background-color: #af252a;
            color: white;
            padding: 4px 8px;
            text-align: center;
            font-size: 16px;
            float: right;
            margin-right: 137px;
            text-decoration: none;ss
        }
    </style>
</head>
<body>

<div class="container">
    <a href="addpost.php" class="add-button">Add New</a>
    <a href="logout.php">Logout</a>
    <h2>Blog Title</h2>

    <table class="table">
        <thead>
        <tr>
            <th width="5%">Sr.no</th>
            <th width="35%">Title</th>
            <th width="35%">Post Date</th>
            <th  width="20%" colspan="2">action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($result as $row){
            echo"<tr>";
            echo"<td>$row->id</td>";
            echo"<td>$row->title</td>";
            echo"<td>$row->date_time</td>";
            echo "<td><a href='edit.php?edid=$row->id' class='edit-button'>edit</a></td>";
            echo "<td><a href='delete.php?delid=$row->id' class='delete-button'>delete</a></td>";
            echo"</tr>";
        }?>
        </tbody>
    </table>
</div>

</body>
</html>
