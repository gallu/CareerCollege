<?php
// mont.php
// モンテカルロ法の簡単な実験

$total = [];
$max = 1000000; // 繰り返す回数
//
for($i = 0; $i < $max; ++$i) {
    //$d = mt_rand(3, 18); // 3-18
    //$d = mt_rand(1,6) + mt_rand(1,6) + mt_rand(1,6); // 3D6
    $d = mt_rand(1,4) + mt_rand(1,6) + mt_rand(1,8);
    @$total[$d] ++;
}
ksort($total);
foreach($total  as  $key => $val) {
    //echo "{$key}: {$val}<br>\n";
    printf("%d: %.2f%%<br>\n", $key, $val / $max * 100);
}

