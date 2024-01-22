<!DOCTYPE html>
<html>

<body>

    <?php

    $arr_number = array(3, 7, 6, 8, 9, 3, 7, 9, 0, 2, 6, 8, 9, 15, 70, 40, 120);
    echo "Mảng ban đầu: " . "<br />";
    foreach ($arr_number as $n) {
        echo "$n <br>";
    }
    echo "<br/>";
    $arr_number_after = array_replace($arr_number, array_fill_keys(array_keys($arr_number, 9), 23));
    echo "Mảng sau khi thay thế: " . "<br />";
    foreach ($arr_number_after as $n) {
        echo "$n <br>";
    }
    echo "<br/>";
    echo "Mảng sắp xếp theo thứ tự tăng dần: " . "<br />";
    sort($arr_number_after);
    foreach ($arr_number_after as $n) {
        echo "$n <br>";
    }
    echo "<br/>";
    echo "Mảng sắp xếp theo thứ tự giảm dần: " . "<br />";
    $arr_number_rsort = rsort($arr_number_after);
    foreach ($arr_number_after as $n) {
        echo "$n <br>";
    }
    echo "<br />";
    echo "Tổng mảng cũ: " . array_sum($arr_number) . "<br />";
    echo "Tổng mảng mới: " . array_sum($arr_number_after);

    ?>

</body>

</html>