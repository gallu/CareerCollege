<?php  // copy4.php

class Hoge {
    public int $num;
}
class Foo {
    public Hoge $hobj;
    public string $name;
}

//
$hobj = new Hoge();
$hobj->num = 123;
//
$fobj = new Foo();
$fobj->name = "foo string";
$fobj->hobj = $hobj;
//
$fobj2 = clone $fobj; // シャローコピー(浅いコピー)
// var_dump($fobj, $fobj2);

$fobj2->hobj->num = 987;
var_dump($fobj, $fobj2);


