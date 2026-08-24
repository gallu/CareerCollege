<?php  // calendar2.php
require_once  __DIR__ . "/zeller.php";
require_once  __DIR__ . "/misoka.php";

$y = (int)date("Y");
$m = (int)date("n");
$misoka = misoka($y, $m);

echo "{$y}年 {$m}月 のカレンダー<br>";

for ($d = 1; $d <= $misoka; ++$d) {
    $w = zeller($y, $m, $d);
    echo "{$d}({$w}) / ";
    
    if ($d%7 === 0) {
        echo "<br>";
    }
}
