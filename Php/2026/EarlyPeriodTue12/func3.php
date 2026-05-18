<?php  // func3.php

// 引数はあるけど戻り値がない
function func($i) {
    echo __FUNCTION__ , ": i is {$i}";
}

func(123);
