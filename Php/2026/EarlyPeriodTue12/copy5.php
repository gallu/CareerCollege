<?php  // copy5.php
declare(strict_types=1);

class Hoge {
    public Foo $fobj;
    public int $price;

    // 深いコピー(ディープコピー)用のギミック
    public function __clone() {
        $this->fobj = clone $this->fobj;
    }
}
class Foo {
    public int $num;
}
//
$fobj = new Foo();
$fobj->num = 111;
//
$hobj = new Hoge();
$hobj->price = 98;
$hobj->fobj = $fobj;
//
var_dump($hobj);
echo "<br>\n";

//
$hobj2 = clone $hobj;
$hobj2->price = 1200;
$hobj2->fobj->num = 999;
var_dump($hobj);
echo "<br>\n";

var_dump($hobj2);
echo "<br>\n";