<?php  // func12.php
declare(strict_types=1);

function hoge(int $num = -1, string $str = "str", float $flo = 3.14, bool $b = false) {
	var_dump($num, $str, $flo, $b);
}

hoge(123, "hello", 1.414, true);
hoge();
echo "<br>\n";
hoge(-1, "str", 3.14, true);
echo "<br>\n";
hoge(b: true);



