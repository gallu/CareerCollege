<?php  // class7.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $i) {
        var_dump($i);
    }
}
//
$obj = new Hoge(999);

