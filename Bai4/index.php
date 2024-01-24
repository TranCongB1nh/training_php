<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $arr_number = "";
    $number = "";
    $number_replace = "";
    $result = "";
    $arr_number_after = "";
    $arr_number1 = "";
    $sum_array = "";
    $sum_array_after = "";
    $array_sort = "";
    $array_rsort = "";

    if (isset($_POST["arr_number"]) && isset($_POST["number"]) && isset($_POST["number_replace"])) {
        $arr_number = $_POST["arr_number"];
        $number = $_POST["number"];
        $number_replace = $_POST["number_replace"];

        if (is_string($arr_number)) {
            $arr_number1 = explode(", ", $arr_number);
            $arr_number_after = array_replace($arr_number1, array_fill_keys(array_keys($arr_number1, $number), $number_replace));
            $sum_array = array_sum($arr_number1);
            $sum_array_after = array_sum($arr_number_after);
        }
    }
    ?>

    <div class="content">
        <h1>Xử lý mảng</h1>
        <form action="" method="post" name="main-form">
            <div class="row">
                <span>Mảng cần xử lý</span>
                <input type="text" name="arr_number" value="<?php echo $arr_number; ?>">
            </div>
            <div class="row">
                <span>Số muốn thay thế</span>
                <input type="number" name="number" value="<?php echo $number; ?>">
            </div>
            <div class="row">
                <span>Số thay thế</span>
                <input type="number" name="number_replace" value="<?php echo $number_replace; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Xử lý" name="submit">
            </div>
            <div class="row">
                <p>
                    <?php
                    echo "Mảng ban đầu: ";
                    print_r($arr_number1);
                    echo '<br/>';
                    echo "Mảng sau khi thay thế: ";
                    print_r($arr_number_after);
                    echo '<br/>';
                    echo "Mảng sắp xếp theo thứ tự tăng dần: ";
                    sort($arr_number_after);
                    foreach ($arr_number_after as $n) {
                        echo "$n ";
                    }
                    echo  "<br/>";
                    rsort($arr_number_after);
                    echo "Mảng sắp xếp theo thứ tự giảm dần: ";
                    foreach ($arr_number_after as $n) {
                        echo "$n ";
                    }
                    echo  "<br/>";
                    echo "Tổng mảng trước thay thế: " . $sum_array . "<br />";
                    echo "Tổng mảng trước sau thay thế: " . $sum_array_after . "<br/>";
                    ?>
                </p>
            </div>
        </form>

    </div>

</body>

</html>