<?php  // func9.php
declare(strict_types=1);

function hoge(int $num = 123, string $name = "hoge", bool $flg = false) {
    var_dump($num, $name, $flg);
}

hoge();
echo "<br>";

hoge(name: "foo");
echo "<br>";
