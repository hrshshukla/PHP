<?php
// # Run one-by-one 

// (1) start session
session_start();


// (2) Set session 
$_SESSION['username'] = "Harsh";
$_SESSION['category'] = "Gamer";


// (3) Get session 
// echo "Username : " . $_SESSION['username'] . "<br>";
// echo "Category : " . $_SESSION['category'] . "<br>";


// (4) Destroy session 
// session_unset();
// session_destroy();

// (5) best practice : don't show error to user when there is no data in session 
if (isset($_SESSION["username"])) {
    echo "Username : " . $_SESSION['username'] . "<br>";
    echo "Category : " . $_SESSION['category'] . "<br>";
}
else{
    echo "Please login";
}
?>