<?php  // if7.php

$age = random_int(30, 70);
$height = random_int(100, 180);

echo "年齢:{$age}, 身長:{$height}<br>";

if ( ($height >= 125)&&($age <= 54) ) {
    echo "乗れます！<br>";
} else {
    echo "乗れません orz<br>";
}


if ( ($height < 125)||($age >= 55) ) {
    echo "乗れません orz<br>";
} else {
    echo "乗れます！<br>";
}
