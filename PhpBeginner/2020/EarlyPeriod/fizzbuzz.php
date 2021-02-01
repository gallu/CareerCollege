<?php  // fizzbuzz.php

// 1～100までを順にカウントする
/*
for($i = 1; $i <= 100; ++$i) {
    if ( (0 === ($i % 3))&&(0 === ($i % 5)) ) {
        // 両者で割り切れる場合（すなわち15で割り切れる場合）は「Fizz Buzz」
        echo "Fizz Buzz<br>\n";
    } else if (0 === ($i % 3)) {
        // 3で割り切れる場合は「Fizz」
        echo "Fizz<br>\n";
    } else if (0 === ($i % 5)) {
        // 5で割り切れる場合は「Buzz」
        echo "Buzz<br>\n";
    } else {
        echo "{$i}<br>\n";
    }
}
*/

for($i = 1; $i <= 100; ++$i) {
    //
    $s = [];
    // 3で割り切れる場合は「Fizz」
    if (0 === ($i % 3)) {
        $s[] = 'Fizz';
    }
    // 5で割り切れる場合は「Buzz」
    if (0 === ($i % 5)) {
        $s[] = 'Buzz';
    }
    //
    if ([] !== $s) {
        // 3で割り切れる場合は「Fizz」
        // 5で割り切れる場合は「Buzz」
        // 両者で割り切れる場合（すなわち15で割り切れる場合）は「Fizz Buzz」
        echo implode(' ', $s), "<br>\n";
    } else {
        echo "{$i}<br>\n";
    }
}


