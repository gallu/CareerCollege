<?php  // class2.php
declare(strict_types=1);

class Hoge {
    public const A = 123;
    
    public function __construct(
        private int $val,
    ) {
    }

    public function B(int $num): int {
        return $this->val * $num;
    }
}

//
$obj = new Hoge(12);
$r = $obj->B( Hoge::A );
var_dump($r);
