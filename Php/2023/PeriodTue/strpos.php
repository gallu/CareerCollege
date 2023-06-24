<?php  // strpos.php

$r = strpos("abcdefg", "abc");
var_dump($r);
if ($r == false) {
    echo "なかったお...";
} else {
    echo "あったお！！";
}
