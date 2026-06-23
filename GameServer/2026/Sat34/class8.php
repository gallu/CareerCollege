<?php  // class8.php
declare(strict_types=1);

class Hoge {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

$obj = new Hoge("ほげ");
var_dump( $obj->getName() );

// 絶対に直接呼ぶな！！ 絶対だ！！
$obj->__construct("ふう");
var_dump( $obj->getName() );
