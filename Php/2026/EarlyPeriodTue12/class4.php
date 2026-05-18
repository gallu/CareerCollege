<?php  // class4.php
declare(strict_types=1);
class Hoge {
    //
    private int $num = 0;
    /* アクセサ */
    // セッター
    public function setNum(int $i) {
        // var_dump($i);
        // var_dump($this->num);
        $this->num = $i;
    }
    // ゲッター
    public function getNum(): int {
        return $this->num;
    }
}
//
$obj = new Hoge();
var_dump($obj);
// $obj->num = 123;
$obj->setNum(111);
var_dump($obj);
echo "<br>";

// var_dump($obj->num);
var_dump($obj->getNum());
