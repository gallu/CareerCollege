<?php  // if2.php

$age = random_int(30, 60);
$height = random_int(100, 180);
echo "age: {$age}, height: {$height} is ... ";

/*
身長制限 125cm〜
年齢制限 〜54才
 */
if ( ($height >= 125)&&($age <= 54) ) {
    echo "乗れます！<br>\n";
} else {
    echo "乗れません...<br>\n";
}