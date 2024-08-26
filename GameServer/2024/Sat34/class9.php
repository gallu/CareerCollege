<?php  // class9.php
declare(strict_types=1);

class Hoge {
    private int $num;
    private string $str;
    
    public function __construct(int $i, string $s) {
        if ($i > 100) {
            throw new Exception("num is under 100: got {$i}");
        }
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
try {
    $obj = new Hoge(999, "hoge");
    var_dump($obj);
} catch (Exception $e) {
    echo $e->getmessage() , "<br>";
}
