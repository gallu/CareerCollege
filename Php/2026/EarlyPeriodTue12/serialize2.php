<?php  // serialize2.php
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
$s = serialize($hobj);
$hobj2 = unserialize($s);

var_dump($hobj);
echo "<br>";
var_dump($hobj2);
