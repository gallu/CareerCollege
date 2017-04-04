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

// 取得カード情報を把握する
$get_card_id = (string)@$_POST['get_card_id'];
if ('' === $get_card_id) {
  $error_ret['msg'] = 'カードIDがオカシイです';
  echo json_encode($error_ret);
  exit ;
}

// カード情報を取得する
// ・「有効なカードIDかどうか」チェック
// ・データを復帰する用途
//
$sql = 'SELECT * FROM cards WHERE card_id=:card_id;';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(':card_id', $get_card_id, PDO::PARAM_STR);
//
$r = $pre->execute();
//var_dump($r);
if (false === $r) {
  $error_ret['msg'] = 'カードIDがオカシイです';
  echo json_encode($error_ret);
  exit ;
}
//
$card_info = $pre->fetch(PDO::FETCH_ASSOC);

// カードの付与
// XXX 本来的には、ここで「コストの消費」をする：ので、トランザクションを張る
$sql = 'INSERT INTO users_deck(user_id, card_id, created) VALUES(:user_id, :card_id, now());';
$pre = $dbh->prepare($sql);
// プレースホルダに値をバインド
$pre->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$pre->bindValue(':card_id', $get_card_id, PDO::PARAM_STR);
// SQLを実行
$r = $pre->execute();
// XXX ここで本来はトランザクションをcommit

// 正常用出力
$ret = array(
  'status' => 'ok',
  'card_info' => $card_info,
);


echo json_encode($ret);
