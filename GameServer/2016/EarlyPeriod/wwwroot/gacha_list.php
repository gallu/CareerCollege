<?php
/*
 * 「１つのがちゃ」の確率一式を取得するコード
 * XXX 通信インタフェース的に脆弱な作りなので、実務では使わないこと！！
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
if ('' === $gacha_type_id) {
  $error_ret['msg'] = 'がちゃタイプがオカシイです';
  echo json_encode($error_ret);
  exit ;
}

//
$sql = 'SELECT * FROM gacha WHERE gacha_type_id=:gacha_type_id ORDER BY probability DESC';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(':gacha_type_id', $gacha_type_id, PDO::PARAM_STR);
//
$r = $pre->execute();
//var_dump($r);
if (false === $r) {
  $error_ret['msg'] = 'がちゃタイプがオカシイです';
  echo json_encode($error_ret);
  exit ;
}
//
$gacha_list = array();
$probability = 0;
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
  $awk = array();

  //
  $probability += $row['probability'];
  $awk['probability'] = $probability;
  //
  $awk['card_id'] = $row['card_id'];

  //
  $gacha_list[] = $awk;
}
//var_dump($gacha_list);

// 正常用出力
$ret = array(
  'status' => 'ok',
  'gacha_list' => $gacha_list,
  'probability_total' => $probability,
);


echo json_encode($ret);
