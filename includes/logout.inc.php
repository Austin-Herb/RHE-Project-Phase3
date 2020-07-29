<?php
    session_start();
    //remove all the session variables
    session_unset();
    //destroy the session
    session_destroy();

    //Redirect back to the index page
    header('Location: ../index.php');
    exit();
?>