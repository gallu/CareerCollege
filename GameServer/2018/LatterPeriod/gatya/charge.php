<?php  // charge.php

// 認証付き初期処理
require_once('./init_auth.php');
//
require_once('./DB.php');
require_once('./Gacya.php');
require_once('./Card.php');
require_once('./UserCards.php');

// がちゃのタイプの把握
// XXX 今回は固定。本来は外部から
// XXX なので、第一種ホワイトリストでセキュリティを担保
$type = 'charge_1';
// がちゃを引くためのコスト
// XXX 本来はDB(がちゃテーブル)から
$cost = 100;

// 先にがちゃを引いておく
$card_id = Gacya::getCard( $type );
$card = new Card($card_id);

// DBハンドルを取得する
$dbh = DB::getHandle();
// ここからトランザクション開始
$dbh->beginTransaction();
// 処理開始
$user_id = Authorization::getUserId();
try {
    // 手持ちの課金石のチェック
    // XXX FOR UPDATE を忘れずに！！
    $sql = 'SELECT * FROM users WHERE user_id = :user_id FOR UPDATE;';
    $pre = $dbh->prepare($sql);
    //
    $pre->bindValue(':user_id', $user_id);
    $r = $pre->execute();
    if (false === $r) {
        throw new Exception($pre->errorInfo()[2]);
    }
    $user = $pre->fetch();
//var_dump($user['charge']);
    if ($user['charge'] < $cost) {
        throw new Exception('お金が足りない: ' . $user['charge']);
    }

    // お支払いをしてもらって
    $sql = 'UPDATE users SET charge = :new_charge WHERE user_id = :user_id;';
    $pre = $dbh->prepare($sql);
    //
    $pre->bindValue(':user_id', $user_id);
    $pre->bindValue(':new_charge', $user['charge'] - $cost);
    $r = $pre->execute();
    if (false === $r) {
        throw new Exception($pre->errorInfo()[2]);
    }

    // カードを１枚引いて
    // XXX 上で引いてる( $card_id )

    // user_cardsに追加する
    $r = UserCards::save($user_id, $card_id);
    if (false === $r) {
        throw new Exception('カードのinsertで失敗');
    }

    // ここでトランザクション終了
    $dbh->commit();

} catch (Exception $e) {
    $dbh->rollBack();
    echo 'すみませんうまく保存できなかったのでもう一回、引き直してね';
var_dump($e->getMessage()); // 本来はlogとかに書く
    return ;
}


// 引いたカードを表示
echo 'カード名: ', $card->card_name, '<br>';
echo "<img src='{$card->image_uri}' width=200>";
echo '<br>', $card->card_text, '<br>';
echo $card->attack , '/' , $card->defense;
