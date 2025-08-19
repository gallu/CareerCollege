<?php  // date3.php

$ds = "2025-06-21T16:33:28+09:00";
//
$t = strtotime($ds);
echo "{$t} <br>";
echo date("Y-m-d H:i:s", $t), "<br>";
//
$dobj = new DateTime($ds);
echo $dobj->format("Y-m-d H:i:s"), "<br>";

$ds = "21/Jun/2025:16:49:44 +0900";
//
$t = strtotime($ds);
echo "{$t} <br>";
echo date("Y-m-d H:i:s", $t), "<br>";
//
$dobj = new DateTime($ds);
echo $dobj->format("Y-m-d H:i:s"), "<br>";

// ダメな日付文字列
$ds = "35/Jun/2025:16:49:44 +0900";
//
$t = strtotime($ds);
var_dump($t);
try {
    $dobj = new DateTime($ds);
} catch (Exception $e) {
    echo "<br>", $e->getMessage(), "<br>";
}
