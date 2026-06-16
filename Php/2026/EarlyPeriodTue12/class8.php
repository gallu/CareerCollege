<?php   // class8.php
declare(strict_types=1);

class Hoge {
    private int $num;
    private string $name;
    
    public function __construct(int $num, string $name) {
        $this->num = $num;
        $this->name = $name;
    }
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

