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


// デイリーガチャ用クラスを継承で作成(本来なら別ファイルのほうがよりよいけど、一端ここに記述)
require_once('gacha_common.php');
class daily_gacha extends gacha {

  // typeを１固定にする
  public function get_gacha_type() { return '1'; }

  // XXX 今回は実装しないけれども「is_daily_gacha()」的なメソッドを別途組み込んでもよい：TopPageとかの表示用に

  // がちゃのコスト消費を上書きする
  protected function pay_cost() {
    // dailyテーブルにinsertしてみる
    $sql = 'INSERT INTO daily_gacha(user_id) VALUES(:user_id);';
    $pre = $this->get_dbh()->prepare($sql);
    // プレースホルダに値をバインド
    $pre->bindValue(':user_id', $this->get_user_id(), PDO::PARAM_STR);
    // SQLを実行
    $r = $pre->execute();
    if (false === $r) {
      throw new Exception('今日はすでにdailyがちゃを引いていると思われます！！');
    }
    //
    return true;
  }

} // end of class

// デイリーながちゃを引く
$obj = new daily_gacha();
$obj->set_dbh($dbh);
$obj->set_user_id($user_id);
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

