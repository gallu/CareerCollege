<?php  // if7.php

$age = random_int(30, 70);
$height = random_int(100, 170);
echo "年齢 {$age}歳, 身長 {$height}cm <br>";

// 「身長 125cm〜」かつ「年齢 〜54才」なら乗れる
// https://www.fujiq.jp/attraction/takabisha.html
if ( ($height >= 125)&&($age <= 54) ) {
    echo "乗れるよ！！<br>";
} else {
    echo "乗れません orz <br>";
}

