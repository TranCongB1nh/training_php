<!DOCTYPE html>
<html>
<body>

<?php

$arr_number = array(3, 7, 6, 8, 9, 3, 7, 9, 0, 2, 6, 8, 9, 15, 70, 40, 120);

$arr_number_after = array_replace($arr_number, array_fill_keys(array_keys($arr_number, 9), 23));

print_r($arr_number);
echo "<br />";
print_r($arr_number_after);
echo "<br />";
echo "Tổng mảng cũ: " . array_sum($arr_number) . "<br />";
echo "Tổng mảng mới: " . array_sum($arr_number_after);

?>

</body>
</html>