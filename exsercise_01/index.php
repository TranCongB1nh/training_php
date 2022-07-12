<?php
    // b1. tao mang 1... 100 su dung loop for
    // b2. dem so nguyen trong mang o b1
    // b3. viet ham kiem tra so nguyen
    // b4. viet ham total // [2,3,4,7.....] 
    $sum = 0;
    $count = 0;
    $array = array();
    for($i = 1; $i <= 100; $i++){
        $array[$i] = $i;
    }
    for($i = 1; $i <= 100; $i++){
        if($array[$i]%2==0){
            $count++;
            echo $array[$i]. " ";
            $sum += $array[$i];
        }
    }
    echo "<br/>";
    echo "so luong so nguyen trong mang la ". $count;
    echo "<br/>";
    if($sum % 2 == 0){
        echo "tong cac so nguyen trong mang la ". $sum;
    }
?>