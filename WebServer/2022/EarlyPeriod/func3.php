<?php   // func3.php
declare(strict_types=1);

class Hoge {
    public int $i;
}
//
function foo(Hoge $o) : void
{
    $o->i *= 3;
}

//
$obj = new Hoge();
$obj->i = 123;
foo($obj);
var_dump($obj);
