<?php  // while.php

// forと同じ処理
$i = 0;
while($i < 10) {
    echo "{$i}, ";
    ++$i;
}
echo "<br> \n";

// 「０が出るまで.を出力し続ける」
while(0 !== random_int(0, 10)) {
    echo ".";
}

