<?php

// "nDn"一つだけを解決する子
function dice_mono($s) {
  //
  list($num, $dice) = explode('d', $s);
//var_dump($num);
//var_dump($dice);
  //
  $ret = 0;
  for($i = 0; $i < $num; $i ++) {
    $ret += mt_rand(1, $dice);
  }
  //
  return $ret;
}

function dice($s) {
  $parts = explode('+', $s);
  $ret = 0;
  foreach($parts as $p) {
    $p = strtolower($p);
    if (false !== strpos($p, 'd')) {
      // ダイスを振る
      $ret += dice_mono($p);
    } else {
      // (数値だろうから)直接足す
      $ret += $p;
    }
  }
  return $ret;
}

// 「６面ダイスを２回」
$i = dice('2d6');
var_dump($i);

//
$i = dice('2D6+2d8');
var_dump($i);

//
$i = dice('1d4+1d6+1d8');
var_dump($i);

//
$i = dice('2D6+3');
var_dump($i);

//
$i = dice('2D6-3');
var_dump($i);
