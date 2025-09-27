<?php
    function sumMarks($arr) {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $value;
        }

        return $sum;
    }

    $marksArr = array(10,20,30,40,50);
    $marks = sumMarks($marksArr);
    echo "$marks";
?>