<?php

$servername = "127.0.0.1:3307"; // --> XAMP's MySQL port
$username = "root";
$password = ""; // --> XAMP's MySQL password (nothing)

// connecting to DB
$connection = mysqli_connect($servername, $username, $password);

// checking if connected or not  
if(!$connection) die("Sorry yaar!!". mysqli_connect_error());
echo "Connection successfull!!";


// creating DB using Query 
$sqlQuery = "CREATE DATABASE Harsh2";
$result = mysqli_query($connection, $sqlQuery); // returns boolean value 

echo $result ? "Database created successfully" : die("Database creation failed >> ". mysqli_error($connection));

?>