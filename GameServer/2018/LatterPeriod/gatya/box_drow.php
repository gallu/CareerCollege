<?php  // box_drow.php

// 認証付き初期処理
require_once('./init_auth.php');
//
require_once('./DB.php');
require_once('./Box.php');
require_once('./Card.php');
require_once('./UserCards.php');

// がちゃのタイプの把握
// XXX 今回は固定。本来は外部から
// XXX なので、第一種ホワイトリストでセキュリティを担保
$type = 'box_1';

// がちゃを引くためのコスト
// XXX 一旦オミット

// DBハンドルを取得する
$dbh = DB::getHandle();
// ここからトランザクション開始
$dbh->beginTransaction();

//
$user_id = Authorization::getUserId();
try {
    // がちゃを引いておく
    $box_obj = new Box($user_id, $type);
    $card_id = $box_obj->drow();
    $card = new Card($card_id);

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


