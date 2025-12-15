<?php

$fptr = fopen("_dummy.txt", "r");

// => Usual Method 
// $content = fread($fptr, filesize("_dummy.txt"));
// echo $content; 


// => Using fgets()
// echo fgets($fptr); // --> Reads line by line 
// echo fgetc($fptr); // --> Reads character by character 

while ($a = fgets($fptr)) {
    echo $a;
}

fclose($fptr);
?>