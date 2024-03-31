<?php  declare(strict_types=1); // e07.php

class Hoge {
    private int $num;
    private string $str;

    public function __construct(int $num, string $str) {
        $this->num = $num;
        $this->str = $str;
    }

    public function getNum(): int {
        return $this->num;
    }
    public function getStr(): string {
        return $this->str;
    }
}

$obj = new Hoge(123, "str");
var_dump($obj->getNum());
var_dump($obj->getStr());
