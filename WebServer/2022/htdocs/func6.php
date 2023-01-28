<?php   // func6.php
declare(strict_types=1);

function hoge() {
    echo "call hoge <br>";
}
hoge();

//
$func = 'hoge';
$func();

//
$func2 = function() {
    echo "call ??? <br>";
};
$func2();
var_dump($func2);
echo "<br>";

//
$i = 10;
$func3 = fn($j) => $i * $j;
$p = $func3(5);
var_dump($p);
// これと一緒
$func3 = function($j) use ($i) {
    return $i * $j;
};
$p = $func3(5);
var_dump($p);

