<?php
// dice.php
function dice_mono($s) {
  //
  $ret = 0;
  //
  $s = strtolower($s);
  list($num, $base) = explode('d', $s);
//var_dump($num);
//var_dump($base);

  // サイコロを振る！！
  for($i = 0; $i < $num; $i ++) {
    $ret = $ret + mt_rand(1, $base);
  }
  //
  return $ret;
}

function dice($s) {
  //
  $ret = 0;  // XXX なんかうまく分解する！！
  //$parts = explode('+', $s);
  $len = strlen($s);
  $flg = '+';
  $parts_plus = array();
  $parts_minus = array();
  $buf = '';
  for($i = 0; $i < $len; $i ++) {
    if ( ('+' === $s[$i])||('-' === $s[$i]) ) {
      if ('+' === $flg) {
        $parts_plus[] = $buf;
      } else {
        $parts_minus[] = $buf;
      }
      $buf = '';
      $flg = $s[$i];
      continue;
    }
    // else
    $buf .= $s[$i];
  }
  if ('' !== $buf) {
    if ('+' === $flg) {
      $parts_plus[] = $buf;
    } else {
      $parts_minus[] = $buf;
    }
  }
//var_dump($s);
//var_dump($parts);
  //
  $ret_plus = 0;
  foreach($parts_plus as $s) {
    if (false !== strpos($s, 'd')) {
      $ret_plus += dice_mono($s);
    } else {
      $ret_plus += $s;
    }
  }
  //
  $ret_minus = 0;
  foreach($parts_minus as $s) {
    if (false !== strpos($s, 'd')) {
      $ret_minus += dice_mono($s);
    } else {
      $ret_minus += $s;
    }
  }

  //
  return $ret_plus - $ret_minus;
}
$i = dice('2d6');
var_dump($i);

$i = dice('1D8');
var_dump($i);

$i = dice('1d6+1d6');
var_dump($i);

$i = dice('2d6+1');
var_dump($i);

$i = dice('1d4+1d6+1d8');
var_dump($i);

$i = dice('2d6-1');
var_dump($i);
