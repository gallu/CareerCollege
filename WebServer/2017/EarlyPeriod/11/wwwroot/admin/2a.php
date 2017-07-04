<?php
// 2a.php
/*
if (2 === '2a') {
    echo 'true';
} else {
    echo 'false';
}
if (false === array()) {
    echo 'true';
} else {
    echo 'false';
}
if (false == 0) {
    echo 'true';
} else {
    echo 'false';
}
*/

//
$pos = strpos('abcdefg', 'D');
var_dump($pos);
//if (false == $pos) {
if (false === $pos) {
    echo 'みつかりませんでした';
} else {
    echo 'みつかりました';
}



