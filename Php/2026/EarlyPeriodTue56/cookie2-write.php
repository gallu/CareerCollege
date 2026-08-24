<?php  // cookie2-write.php
declare(strict_types=1);
ob_start();

// 絶対にやっちゃだめ！！！！
// 「安全でないデシリアライゼーション」になりえる！！
// $obj = new stdClass();
// $obj_s = serialize($obj);
// $arr = [1, 2, 3];
// $arr_s = serialize($arr);
//
$obj = new stdClass();
$obj_s = json_encode($obj); // XXX 壊れる
$arr = [1, 2, 3];
$arr_s = json_encode($arr);

setcookie("obj", $obj_s);
setcookie("arr", $arr_s);

echo "fin.";
