<?php  // func4.php

function func(int $num) {
    echo "in func <br>";
    var_dump($num);
    $num *= 999;
    var_dump($num);
    echo "out func <br>";
}
//
$num = 111;
func($num);
var_dump($num);

//
echo "<br><br>";
function func2(int &$num) {
    echo "<br>in func2 <br>";
    var_dump($num);
    $num *= 999;
    var_dump($num);
    echo "out func2 <br>";
}
//
$num = 111;
var_dump($num);
func2($num);
var_dump($num);








