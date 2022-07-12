<?php
    $number = 68;
    $str = "78, 68, 132, 90, 11, 40, 24, 100, 99, 65, 32, 48, 68, 19, 03, 200, 405, 879, 222, 6568, 68, 89, 90, 68, 9310, 2865, 6528, 68, 6802, 2068, 88, 68";
    $array = explode(", ",$str);
    $count = array_count_values($array);
    // echo "<pre>";
    // print_r($count);
    echo "developer có ID la ". $number ." tre task la ". $count[$number] ." lan"; 
?>