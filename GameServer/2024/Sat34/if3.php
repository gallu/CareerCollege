<?php  // if3.php

$r = strpos("abcdefg", "a");
var_dump($r);
// if ($r == false) {
if ($r === false) {
    echo "見つからなかった orz";
} else {
    echo "見つかったよ！！";
}
