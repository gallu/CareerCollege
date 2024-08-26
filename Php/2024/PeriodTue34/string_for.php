<?php  // string_for.php

$str = "All in the golden afternoon Full leisurely we glide;";
$len = strlen($str);
echo "len is {$len} <br>";

// echo $str[0] , "<br>";
// echo $str[1] , "<br>";
// echo $str[2] , "<br>";

for ($i = 0; $i < $len; ++$i) {
    echo $str[$i] , "<br>";
}
