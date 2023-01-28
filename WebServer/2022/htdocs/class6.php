<?php   // class6.php
declare(strict_types=1);

class Hoge {
    public function setNum(int $num) {
        $this->num = $num;
    }
    public function getNum() {
        return $this->num;
    }
    private int $num;
}
//
$obj = new Hoge();
$obj->setNum(123);
var_dump($obj);
echo "<br>";

//
$obj2 = $obj;
$obj2->setNum(999);
var_dump($obj2);
echo "<br>";
var_dump($obj);
echo "<br>";

//
$obj3 = clone $obj; // シャローコピー と ディープコピー に注意
$obj3->setNum(31415);
var_dump($obj3);
echo "<br>";
var_dump($obj);
echo "<br>";

