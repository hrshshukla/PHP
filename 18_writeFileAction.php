<?php

// Automatically creates file
$fptr = fopen("new_dummy.txt", "w"); // mode:"r"  --> mode:"w"
// write mode 
fwrite( $fptr,"this is line 1 \nthis is line 2");
fwrite( $fptr,"\nthis is line 3");


// append mode 
$fptr2 = fopen("new_dummy.txt", "a"); // mode:"r"  --> mode:"a"
fwrite( $fptr2,"\nthis is appended data");


fclose($fptr);
?>