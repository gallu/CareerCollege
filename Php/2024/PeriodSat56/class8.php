<?php  // class8.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $i, string $s) {
        var_dump($i, $s);
    }
}

$obj = new Hoge(12, "sss");

