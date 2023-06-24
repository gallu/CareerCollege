<?php  // class1.php
declare(strict_types=1);

class Hoge {
    public const A = 123;
    
    public function __construct(int $val) {
        $this->val = $val;
    }

    public function B(int $num): int {
        return $this->val * $num;
    }

    private int $val;
}

//
$obj = new Hoge(12);
$r = $obj->B( Hoge::A );
var_dump($r);

