<?php
    $host = "localhost";
    $user = "kdong";
    $pass = "as2418963*";
    $db = "kdong";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo  "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>