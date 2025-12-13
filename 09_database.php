<?php
// (1) MySQLi   (2)PHP Data object - PDO

// Required values to establish connection  

// $servername = "127.0.0.1";   // --> Separate MySQL's port (localhost OR  127.0.0.1:3306 OR 127.0.0.1)
// $password = "ABC@xyz#123";  --> Separate MySQL's port

$servername = "127.0.0.1:3307"; // --> XAMP's MySQL port
$username = "root";
$password = ""; // --> XAMP's MySQL password (nothing)

// connecting to DB
$connection = mysqli_connect($servername, $username, $password);

if(!$connection){
    die("Sorry yaar!!". mysqli_connect_error());
}

echo "Connection successfull!!";

?>