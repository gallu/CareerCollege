<?php  // Q2.php

/*
$num = random_int(1, 10);
の値が
・5未満なら「under」と出力
・5なら「just 5」と出力
・6以上なら「upper」と出力する
コードを書きなさい。
 */
$num = random_int(1, 10);

if (5 > $num) {
    echo "under";
} elseif (5 === $num) {
    echo "just 5";
} else {
    echo "upper";
}


if (5 > $num) {
    echo "under";
} elseif (5 === $num) {
    echo "just 5";
} elseif (6 <= $num) {
    echo "upper";
}


