<?php  // clone.php
//
class hoge {
}

//
$obj = new hoge();
$obj2 = $obj;
$obj3 = clone $obj;
//
var_dump($obj, $obj2, $obj3);

