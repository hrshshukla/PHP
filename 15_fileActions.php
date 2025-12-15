<?php


// (1) Direct method  
$data = readfile("_dummy.txt"); // --> work hard in public and let your failure make you silent 57
echo $data;

// (2) Using pointer
$fptr = fopen("_dummy.txt", "r");

$content = fread($fptr, filesize("_dummy.txt"));
echo $content; // --> work hard in public and let your failure make you silent 

fclose($fptr);
?>