<?php  // func7.php
declare(strict_types=1);

function hoge(int $num, string $name, bool $flg) {
    var_dump($num, $name, $flg);
}

hoge(123, "name", true);
echo "<br>";

hoge(num: 456, name: "foo", flg: false);
echo "<br>";

hoge(flg: true, num: 987, name: "hoge");
echo "<br>";

