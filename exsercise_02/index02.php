<?php
    $course = array("ajax" => 128, "javascr" => 4, "wordpress" => 2220, "code" => 520);
    $min = min($course);
    $max = max($course);
    $findMin = array_search($min, $course);
    $findMax = array_search($max, $course);
    echo "khoa hoc co thoi luong it nhat la ". $findMin;
    echo "<br/>";
    echo "khoa hoc co thoi luong nhieu nhat la ". $findMax;
?>