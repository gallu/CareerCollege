<?php
// 5th_class.php
class gatya {
  static public function get($type) {
    // 「がちゃリスト」を持ってなければ
    if (false === isset(gatya::$list[$type])) {
      // がちゃリストを作る
      // XXX DBにアクセスして一覧を取得する
      gatya::$list[$type] = XXXXX;
    }
    // 「がちゃリスト」に従ってがちゃ
  }
static private $list = [];
}

// 使い方
$gatya_type = 'nomal';
$card = gatya::get($gatya_type);
