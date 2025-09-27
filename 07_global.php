<?php
    $a = 100;

    function update() {
        global $a;
        $a = 999;
        echo $a. "\n";
    }

    update();
    echo $a. "\n";


    echo var_dump($GLOBALS); // contains all the built-in global + user defined global variables  
    echo var_dump($GLOBALS["a"]);
?>