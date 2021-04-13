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

        .clear-button {
            background-color: cornflowerblue;
            color: white;
            padding: 6px 12px;
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="blog.php" class="back-button">Back</a>
    <!-- Start body parte -->
    <div class="form-box">
        <!-- black class for text black-->
        <h1 class="black">Add</h1>
        <!-- Use Form tag and input types -->
        <form method="post" action="addpost_save.php" id="myForm" onsubmit="event.preventDefault(); validateMyForm();">
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea typeof="text" name="description" id="description" placeholder="Description"></textarea>
            <!-- Button for Submit form -->
            <button class="button" type="submit" name="save">Submit</button>
            <button class="clear-button" type="button" onclick="clearForm()">Clear</button>
        </form>
    </div>
</div>


</body>

<script>
    //Clear frm data
    function clearForm() {
        document.getElementById('myForm').reset();
    }

        function validateMyForm()
        {
            var title =  document.getElementById('title').value;
            var description =  document.getElementById('description').value;

            if (title == '') {
                document.getElementById("title").style.border = '1px solid red';
            } else {
                document.getElementById("title").style.border = '';
            }
            if ( description == '') {
                document.getElementById("description").style.border = '1px solid red';
            } else {
                document.getElementById("description").style.border = '';
            }
            if (title &&  description) {
                document.getElementById("myForm").submit();
                return true;
            }else{
                return false;
            }

        }



</script>
</html>

