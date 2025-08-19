<?php  // continue.php

for ($i = 0; $i < 10; ++$i) {
    if ($i%2 === 0) {
        continue;
    }

    echo "{$i}, ";
}
echo "<br>";

// 普通やらない
$i = 0;
while($i < 10) {
    $no = $i;
    $i ++;
    
    if ($no%2 === 0) {
        continue;
    }

    echo "{$no}, ";    
}
echo "<br>";
