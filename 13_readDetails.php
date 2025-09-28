<?php

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "harsh";

// connecting to DB
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Sorry yaar!!" . mysqli_connect_error());
}
echo "Connection successfull!! \n";


// Reading from DB
$fetchQuery = "SELECT * FROM details";
$result = mysqli_query($connection, $fetchQuery); // $result is a mysqli_result object
$rows = mysqli_num_rows($result);


$data = []; // empty array to store all rows / all data;

if ($rows > 0) {
    while( $row = mysqli_fetch_array($result)) {
        echo $row["email"] ." : ". $row["password"] ."\n";
        $data[] = $row;
    }
}

print_r($data);
?>