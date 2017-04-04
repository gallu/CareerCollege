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

//
$sql = 'select *,count(*) as cnt from users_deck left join cards ON users_deck.card_id = cards.card_id where users_deck.user_id = :user_id GROUP BY users_deck.card_id ORDER BY users_deck.card_id;
';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(':user_id', $user_id, PDO::PARAM_STR);
//
$r = $pre->execute();
//var_dump($r);
if (false === $r) {
  $error_ret['msg'] = 'なにがしかのエラーです';
  echo json_encode($error_ret);
  exit ;
}
//
$card_list = array();
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
  //
  $card_list[] = $row;
}
//var_dump($gacha_list);

// 正常用出力
$ret = array(
  'status' => 'ok',
  'card_list' => $card_list,
);


echo json_encode($ret);
