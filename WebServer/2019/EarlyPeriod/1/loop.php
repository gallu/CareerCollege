<?php  // loop.php

for ($i = 0; $i < 10; $i ++) {
    echo "{$i} ";
}
echo "\n";
//
$i = 0;
while($i < 10) {
    echo "{$i} ";
    $i++;
}
echo "\n";

//
while(false) {
    echo "in while\n";
}
//
do {
    echo "in do-while\n";
} while(false);

//
$awk = [0, 1, 2, 3];
foreach($awk as $val) {
    echo "{$val} ";
}
echo "\n";
//
$awk2 = [
    'hoge' => 1,
    'foo' => 2,
    'bar' => 3,
];
foreach($awk2 as $key => $val) {
    echo "{$key}:{$val} ";
}
echo "\n";






