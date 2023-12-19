<?php  // class12.php
declare(strict_types=1);

// 無名クラス
$obj = new class() {};
var_dump($obj);

$obj = new class(num: 123) {
    private int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }
};
var_dump($obj);
var_dump($obj->getNum());

//
$obj = new class(963) {
    public function __construct(
        public readonly int $num,
    ) {
    }
};
var_dump($obj->num);

