<?php   // php82.php

// 非推奨: 動的なプロパティの利用 
class HogePro {
}
$obj = new HogePro();
$obj->data = 123; // 動的なプロパティ: Deprecated: Creation of dynamic property

// "${var}" / "${expr}" 形式の、文字列への値の埋め込み
$num = 123;
var_dump( "num is {$num} . <br>" ); // ok
var_dump( "num is ${num} . <br>" ); // ng
