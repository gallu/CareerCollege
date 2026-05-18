<?php  // class2.php
declare(strict_types=1);

class Hoge {
    // 関数(メソッド)
    public function func(int $i, int $j): int {
        return $i + $j;
    }
}

//
$obj = new Hoge();
$r = $obj->func(12, 34);
var_dump($r);
