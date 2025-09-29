<?php
// COOKIE : stores insensitive data of user in his computer 
// SESSION : stores sensitive data of user in server

// Create cookie
// setcookie("category", "gamer", time()+60*60*12, "/");

// get cookie 
$value = $_COOKIE["category"];
echo "".$value.""; // --> (Browser) : gamer
?>