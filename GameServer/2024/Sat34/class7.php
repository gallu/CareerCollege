<?php  // class7.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $num) {
        var_dump($num);
    }
}

//
$obj = new Hoge(123);
