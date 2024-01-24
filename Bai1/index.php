<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php

    $str = "";
    $result = "";

    if (isset($_POST["str"])) {
        $str = $_POST["str"];
        if (is_string($str)) {
            switch ($str) {
                case strtoupper($str):
                    $result = strtolower($str);
                    break;
                case strtolower($str):
                    $result = strtoupper($str);
                    break;
                default:
                    for ($i = 0; $i < strlen($str); $i++) {
                        if ($str[$i] == strtoupper($str[$i])) {
                            $result .= strtolower($str[$i]);
                        } else if ($str[$i] == strtolower($str[$i])) {
                            $result .= strtoupper($str[$i]);
                        }
                    }
                    break;
            }
        } else {
            $result = "Vui lòng nhập một chuỗi";
        }
    }

    ?>

    <div class="content">
        <h1>Đổi chuỗi</h1>
        <form action="" method="post" name="main-form">
            <div class="row">
                <span>Chuỗi cần đổi</span>
                <input type="text" name="str" value="<?php echo $str; ?>">
            </div>
            <div class="row">
                <input type="submit" value="Đổi" name="submit">
            </div>
            <div class="row">
                <p>
                <p><?php echo "Kết quả là: " . $result; ?></p>
                </p>
            </div>
        </form>

    </div>

</body>

</html>