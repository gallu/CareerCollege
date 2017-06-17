<?php
// dice2.php
class dice {
  static public function parse($s) {
//var_dump($s);
    // 「小文字」にそろえる
    $s = strtolower($s);
    // 分解
    $awk = explode('d', $s);
//var_dump($awk);
    // さいころを振る
    $r = 0;
    for($i = 0; $i < $awk[0]; ++$i) {
      //$r = $r + static::d($awk[1]);
      $r += static::d($awk[1]);
    }
    //
    return $r;
  }

  static public function d6() {
    return static::d(6);
  }
  static public function d10() {
    return static::d(10);
  }
  //
  static protected function d($base) {
    return mt_rand(1, $base);
  }
}
//
$r = dice::parse('2d10');
var_dump($r);
$r = dice::parse('3D6');
var_dump($r);
/*
$r = dice::parse('1d6+2d8');
$r = dice::parse('1d6+3');
$r = dice::parse('1d6-4');
$r = dice::parse('1d6+2d8-5');
*/


/*
// 1d6
$r = dice::d6();
var_dump($r);
// 2d10
$r = dice::d10() + dice::d10();
var_dump($r);
*/
