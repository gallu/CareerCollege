<?php   // strpos.php

$pos = strpos("abcdefg", "a");
var_dump($pos);

// if (false == $pos) {
if (false === $pos) {
    echo "文字がなかったよ orz";
} else {
    echo "文字があった！ あったよ！！";
}
