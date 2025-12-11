<?php

// (1) strlen()
$name = "Harsh Shukla";
echo "Length is : " . strlen($name) . "\n";


// (2) str_word_count()
echo "Words : " . str_word_count($name) . "\n";
echo "Reverse : " . strrev($name) . "\n";

echo "" . strpos($name, "Shukla"). "\n";

echo str_replace("Harsh", "harshh", $name) . "\n";
echo "" . $name . "\n";

echo var_dump("1" === 1); // false
?>