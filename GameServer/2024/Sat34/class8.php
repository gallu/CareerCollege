<?php  // class8.php
declare(strict_types=1);

class Hoge {
    private int $num;
    private string $str;
    
    public function __construct(int $i, string $s) {
        $this->num = $i;
        $this->str = $s;
    }
    //
    public function getNum(): int {
        return $this->num;
    }
    public function getStr(): string {
        return $this->str;
    }
}

//
$obj = new Hoge(999, "hoge");
var_dump($obj);
