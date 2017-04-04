<?php
/*
 * がちゃを引くコード
 */

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// 認証確認
require_once('is_auth.php');
//var_dump($name);
//var_dump($user_id);

// がちゃの一覧を取得する
$gacha_type_id = (string)@$_POST['gacha_type_id'];
//$gacha_type_id = '1'; // PHP単体テスト用

// がちゃを引く
require_once('gacha_common.php');
$obj = new gacha();
$obj->set_dbh($dbh);
$obj->set_user_id($user_id);
$obj->set_gacha_type($gacha_type_id);
//
$r = $obj->choose();
if (false === $r) {
  $s = 
  $error_ret['msg'] = $obj->get_error_message();
  echo json_encode($error_ret);
  exit ;
}
// else
$card_info = $obj->get_card_info();



// 正常用出力
$ret = array(
  'status' => 'ok',
  'card_info' => $card_info,
);


echo json_encode($ret);

