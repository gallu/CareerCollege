<?php  // copy4.php
declare(strict_types=1);

class Hoge {
    public Foo $fobj;
    public int $price;
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

// シャローコピー(浅いコピー)
$hobj2 = clone $hobj;
$hobj2->price = 1200;
$hobj2->fobj->num = 999;
var_dump($hobj);
echo "<br>\n";

var_dump($hobj2);
echo "<br>\n";


