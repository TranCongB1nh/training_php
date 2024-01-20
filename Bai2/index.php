<!DOCTYPE html>
<html>
<body>

<?php

$totalLine = 8;
$timeDoing = 4;

$salary = $timeDoing * 20;
if($totalLine < 10){
    $salary -= 1;
}else if($totalLine >= 10 && $totalLine <= 20){
    $salary = $salary - 2;
}else if($totalLine > 20){
    $salary = $salary - 5;
}

echo "Mức lương:". $salary . "$";

?>

</body>
</html>