<?php  // copy2.php
declare(strict_types=1);

// シャローコピー(浅いコピー)
class Hoge {
    public int $num;
}

class Foo {
    public int $ber;
    public Hoge $obj;
}
//
$hobj = new Hoge();
$hobj->num = 1;
//
$fobj = new Foo();
$fobj->ber = 2;
$fobj->obj = $hobj;
var_dump($fobj);
echo "\n";

//
$fobj2 = clone $fobj;
$fobj2->ber = 999;
$fobj2->obj->num = 999;
var_dump($fobj, $fobj2);
echo "\n";