<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-box" style="margin-top: 140px;width: 40%">
    <h1 class="black">Login</h1>
    <!-- Submit on login_save.php file to check detail is valid or not-->
    <form action="login_save.php" method="post">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <button class="button" type="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>
<ht