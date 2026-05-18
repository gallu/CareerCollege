<?php  // string1.php

$num = 123;
echo "num is ";
echo $num;
echo " .";
echo "<br>";

// echo はカンマ(,)で横につなげられる
echo "num is ", $num,  " .", "<br>";

// {}内に変数を書くと中身を展開してくれる
echo "num is {$num} .";
