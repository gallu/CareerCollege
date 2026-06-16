<?php  // class9.php
declare(strict_types=1);

// XXX これはPHP8以降
class Hoge {
    // コンストラクタのプロモーション(昇格)
    public function __construct(
        private int $num,
        private string $name,
    ){}
    // ゲッター
    public function getNum(): int {
        return $this->num;
    }
    public function getName(): string {
        return $this->name;
    }
}

$obj = new Hoge(456, "hogera");
var_dump($obj);
var_dump($obj->getNum(), $obj->getName());





