<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "harsh";

    // connecting to DB
    $connection = mysqli_connect($servername, $username, $password, $database);

    // checking if connected or not  
    if (!$connection)
        die("Sorry yaar!!" . mysqli_connect_error());
    echo "Connection successfull!! \n";

?>