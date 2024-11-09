<?php  // extends4.php

class Hoge {
}

class Foo {
}

// 多重継承、は、できない
class Bar extends Hoge, Foo { // Parse error: syntax error, unexpected token ",", expecting "{" in 
}

$obj = new Bar();
