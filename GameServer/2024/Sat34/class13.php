<?php  // class13.php

#[\AllowDynamicProperties]
class Hoge {
}

$obj = new Hoge();
$obj->hoge = 123;
$obj->foo = "hoge";
var_dump($obj);
