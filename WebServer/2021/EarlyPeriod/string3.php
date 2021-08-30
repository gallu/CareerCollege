<?php   // string3.php
declare(strict_types=1);

// 分解と結合
$s = '1,2,3,4,5';
$awk = explode(',', $s);
var_dump($awk);

//
$s2 = implode(':', $awk);
var_dump($s2);
