<?php
    //Variables for server(host), db_user, db_password, db_name
    $host = "localhost";
    $db_user = "wlbolhjp_user01";
    $db_password = "user01";
    $db_name = "wlbolhjp_project_04";

    //Database connection string -- server, user, password, database (in that order)
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    // //Failed connection
    if(!$conn){
         echo "Error: There was a problem connecting, try again.";
    };

?>