<!DOCTYPE html>
<html>
<body>

<?php

$str = "hai lan";
$str1 = "HAI LAN";
$str2 = "HaI Lan";

echo strtoupper($str) . "<br />";
echo strtolower($str1) . "<br />";

for($i = 0; $i < strlen($str2); $i++){
    if($str2[$i] == strtoupper($str2[$i])){
        echo strtolower($str2[$i]);
    }
    if($str2[$i] == strtolower($str2[$i])){
        echo strtoupper($str2[$i]);
    }
}

?>
   
</body>
</html>