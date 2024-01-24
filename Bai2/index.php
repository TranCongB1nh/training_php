<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php

    $totalLine = "";
    $timeDoing = "";
    $result = "";
    $salary = "";
    if (isset($_POST["totalLine"]) && isset($_POST["timeDoing"])) {
        $totalLine = $_POST["totalLine"];
        $timeDoing = $_POST["timeDoing"];
        $salary = $timeDoing * 20;
        if (is_numeric($totalLine) && is_numeric($timeDoing)) {
            switch ($totalLine) {
                case ($totalLine < 10):
                    $result = $salary - 1;
                    break;
                case ($totalLine >= 10 && $totalLine <= 20):
                    $result = $salary - 2;
                    break;
                case ($totalLine > 20):
                    $result = $salary - 5;
                    break;
            }
        } else {
            $result = "Vui lòng nhập một số";
        }
    }

    ?>

    <div class="content">
        <h1>Caculator</h1>
        <form action="" method="post" name="main-form">
            <div class="row">
                <span>Số dòng code</span>
                <input type="number" name="totalLine" value="<?php echo $totalLine; ?>">
            </div>
            <div class="row">
                <span>Số giờ làm</span>
                <input type="number" name="timeDoing" value="<?php echo $timeDoing; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Tính" name="submit">
            </div>
            <div class="row">
                <p>
                <p><?php echo "Kết quả là: " . $result . "$"; ?></p>
                </p>
            </div>
        </form>

    </div>
</body>

</html>