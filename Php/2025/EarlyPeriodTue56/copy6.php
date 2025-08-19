<?php  // copy6.php

class Hoge {
    public int $num;
}
class Foo {
    public Hoge $hobj;
    public string $name;

    public function __clone() {
        $this->hobj = clone $this->hobj;
    }
}
//
$hobj = new Hoge();
$hobj->num = 123;
//
$fobj = new Foo();
$fobj->name = "foo string";
$fobj->hobj = $hobj;
//
$fobj2 = clone $fobj; // ディープコピー(深いコピー)
// var_dump($fobj, $fobj2);

$fobj2->hobj->num = 987;
var_dump($fobj, $fobj2);


