<?php
//Start or continue the session
session_start();

//If user is not logged in, redirect to login
if(!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit();
};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body class="loggedin">
        <nav class="navtop">
            <div>
                <h1>Website Title</h1>
                <a href="index.php"><i class="fas fa-user-circle"></i>Home</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Loutout</a>
            </div>
        </nav>
        <div class="content">
            <h2>Home Page</h2>
            <p> Welcome back, <?=$_SESSION['currentUser']?>!</p>
        </div>
    </body>
</html>