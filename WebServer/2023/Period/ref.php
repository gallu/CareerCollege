<?php  // ref.php
declare(strict_types=1);

function func1(int $local_num) {
    $local_num += 19;
}
//
$global_num = 0;
func1($global_num);
var_dump($global_num);

class Hoge {
    public int $num = 0;
}
function func2(Hoge $local_obj) {
    $local_obj->num += 19;
}
$obj = new Hoge();
var_dump($obj);
func2($obj);
var_dump($obj);
