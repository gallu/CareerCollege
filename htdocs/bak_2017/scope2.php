<?php
// scope2.php
function hoge() {
    $l_val = 10;
}
function foo() {
    var_dump($l_val);
}
//
foo();
