<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">

        <div class="content">
            <h3 <span> HI user</span></h3>
            <h1 <span> <?php $_SESSION['user_name'] ?></span></h1>
            <p> this is a user page </p>
            <a href="login_page.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout_page.php" class="btn">logout</a>
        </div>
    </div>

</body>
</html>