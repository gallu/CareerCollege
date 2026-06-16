<?php  // FizzBuzz.php
/*
 * 1から順に数を数え上げ、3の倍数で「Fizz」、5の倍数で「Buzz」、両方の倍数（15の倍数）で「FizzBuzz」と言う
 */
for ($i = 1; $i <= 100; ++$i) {
    if (($i % 15) === 0) {
        echo "FizzBuzz, ";
    } elseif (($i % 3) === 0) {
        echo "Fizz, ";
    } elseif (($i % 5) === 0) {
        echo "Buzz, ";
    } else {
        echo "{$i}, ";
    }
}
echo "<br><br>";

// 別解
for ($i = 1; $i <= 100; ++$i) {
    $r = "";
    if (($i % 3) === 0) {
        $r = $r . "Fizz";
    }
    if (($i % 5) === 0) {
        $r = $r . "Buzz";
    }
    if ("" === $r) {
        $r = "{$i}";
    }
    echo "{$r}, ";
}
echo "<br><br>";
