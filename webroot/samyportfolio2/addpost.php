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
        <!-- This form submit on addpost_save.php -->
        <form method="post" action="addpost_save.php" id="myForm" >
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea typeof="text" name="description" id="description" placeholder="Description"></textarea>
            <!-- Button for Submit form -->
            <button class="button" type="submit" name="save">Submit</button>
            <!-- Criteria 1 -->
            <button class="clear-button" type="button" onclick="clearForm()">Clear</button>
        </form>
    </div>
</div>


</body>
<script
    src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script>
    // Criteria 1 clear form function
    function clearForm() {
        document.getElementById('myForm').reset();
    }
    //Crtieria 2nd where we highlight the form if not value/valid

        $("#myForm").submit(function (e) {
            e.preventDefault(); // Prevent Default
            if ($('#title').val() == '') {
                $('#title').css("border", "1px solid red")
            } else {
                $('#title').css("border", "")
            }
            if ($('#description').val() == '') {
                $('#description').css("border", "1px solid red")
            } else {
                $('#description').css("border", "")
            }
            if ($('#title').val() && $('#description').val()) {
                document.getElementById("myForm").submit();
            }
            //window.history.back();
        });



    // $(document).ready(function () {
    //     $("#myForm").submit(function (e) {
    //         e.preventDefault()
    //
    //         if ($('#title').val() == '') {
    //             $('#title').css("border", "1px solid red")
    //         } else {
    //             $('#title').css("border", "")
    //         }
    //         if ($('#description').val() == '') {
    //             $('#description').css("border", "1px solid red")
    //         } else {
    //             $('#description').css("border", "")
    //         }
    //
    //         if ($('#title').val() && $('#description').val()) {
    //             $("#myForm").submit()
    //         }
    //         return false;
    //     });
    // });
</script>
</html>

