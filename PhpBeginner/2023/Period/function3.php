<?php // function3.php

// 値を倍にする
function valueDouble($i) {
    echo "vd: in {$i} <br>";
    $i = $i * 2;
    echo "vd: out {$i} <br>";
    
    // return $i;
}

$num = 10;
valueDouble($num);
// $num = valueDouble($num);
echo "num is {$num} <br>";
