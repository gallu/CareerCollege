<?php  // func4.php

// 引数が複数ある関数
function func($i, $s) {
    var_dump(__FUNCTION__, $i, $s);
}

func(123, "hoge");
