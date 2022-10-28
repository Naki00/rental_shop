<?php

    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "dbstord";
    
    $dbcon = mysqli_connect($servername, $username, $userpass, $dbname);
    mysqli_query($dbcon,"set char set utf8");
?>