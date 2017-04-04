<?php
/*
 * がちゃを引くclass
 */

class gacha {

//public:
  // dbh
  public function get_dbh() { return $this->dbh_; }
  public function set_dbh($v) { $this->dbh_ = $v; }
  // user_id
  public function get_user_id() { return $this->user_id_; }
  public function set_user_id($v) { $this->user_id_ = $v; }
  // gacha_type
  public function get_gacha_type() { return $this->gacha_type_; }
  public function set_gacha_type($v) { $this->gacha_type_ = $v; }
  // card_info
  public function get_card_info() { return $this->card_info_; }
  protected function set_card_info($v) { $this->card_info_ = $v; }
  // error_message
  public function get_error_message() { return $this->error_message_; }
  protected function set_error_message($v) { $this->error_message_ = $v; }

  // がちゃのコスト消費(一端からメソッド)
  protected function pay_cost() {
    // XXX 本来なら「ガチャタイプに沿ったコストの支払い」と「支払えなかったら例外をスロー」なロジックが入る
    //throw new Exception('コストが支払えません！！');
    return true;
  }

  //
  public function choose() {
    if ('' === $this->get_gacha_type()) {
      $this->set_error_message('がちゃタイプがオカシイです');
      return false;
    }
    if ('' === $this->get_user_id()) {
      $this->set_error_message('ユーザが指定されていません');
      return false;
    }

    // 「指定されたがちゃタイプ」の情報一式を取得
    $sql = 'SELECT * FROM gacha WHERE gacha_type_id=:gacha_type_id ORDER BY probability DESC';
    $pre = $this->get_dbh()->prepare($sql);
    //
    $pre->bindValue(':gacha_type_id', $this->get_gacha_type(), PDO::PARAM_STR);
    //
    $r = $pre->execute();
//var_dump($r);
    if (false === $r) {
      $this->set_error_message('がちゃタイプがオカシイです');
      return false;
    }
    //
    $gacha_list = array();
    $probability = 0;
    while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
      //
      $probability += $row['probability'];
      $gacha_list[$probability] = $row['card_id'];

    }
//var_dump($gacha_list);

    // 選び出す
    $i = mt_rand(0, $probability);
    $get_card_id = '';
    foreach($gacha_list as $probability_num => $card_id) {
      if ($i < $probability_num) {
        $get_card_id = $card_id;
        break;
      }
    }
//var_dump($get_card_id);

    // カード情報を取得する
    // ・「有効なカードIDかどうか」チェック(念の為)
    // ・データを復帰する用途
    //
    $sql = 'SELECT * FROM cards WHERE card_id=:card_id;';
    $pre = $this->get_dbh()->prepare($sql);
    //
    $pre->bindValue(':card_id', $get_card_id, PDO::PARAM_STR);
    //
    $r = $pre->execute();
//var_dump($r);
    if (false === $r) {
      $this->set_error_message('カードIDがオカシイです');
      return false;
    }
    //
    $this->set_card_info($pre->fetch(PDO::FETCH_ASSOC));
//var_dump($this->get_card_info());

    // カードの付与
    // XXX 本来的には、ここで「コストの消費」をする：ので、トランザクションを張る
    $this->get_dbh()->beginTransaction();
    try {
      // コストの消費(実際は空メソッド)
      $this->pay_cost();

      // cardのinsert
      $sql = 'INSERT INTO users_deck(user_id, card_id, created) VALUES(:user_id, :card_id, now());';
      $pre = $this->get_dbh()->prepare($sql);
      // プレースホルダに値をバインド
      $pre->bindValue(':user_id', $this->get_user_id(), PDO::PARAM_STR);
      $pre->bindValue(':card_id', $get_card_id, PDO::PARAM_STR);
      // SQLを実行
      $r = $pre->execute();
      if (false === $r) {
        throw new Exception('insert error');
      }
//var_dump($r);
    } catch(Exception $e) {
      $this->get_dbh()->rollBack();
      $this->set_error_message('処理でエラーが発生しました:' . $e->getMessage());
      return false;
    }
    // トランザクションをcommit
    $this->get_dbh()->commit();

    //
    return true;
  }


//private:
private $dbh_;
private $user_id_ = '';
private $gacha_type_ = '';
private $card_info_;
private $error_message_ = '';
} // end of class

/*
// 使い方イメージ

$obj = new gacha();
$obj->set_dbh($dbh);
$obj->set_user_id($user_id);
$obj->set_gacha_type($gacha_type);
//
$r = $obj->choose();
if (false === $r) {
    $s = $obj->get_error_message();
}
// else
$card_info = $obj->get_card_info();

 */


