<?php  // daily.php

// 認証付き初期処理
require_once('./init_auth.php');
//
require_once('./DB.php');
require_once('./Gacya.php');
require_once('./Card.php');
require_once('./UserCards.php');

// がちゃtypeは固定
/*
CREATE TABLE daily_gatya_type (
    gacha_type VARBINARY(128) NOT NULL,
    from_date DATE NOT NULL,
    to_date DATE NOT NULL
);
 */
$type = 'nomal_6'; // XXX 本来はDBとかに出したほうがいい

// 「dailyがちゃをすでに引いてるか」確認
//$loot_date = date('Y-m-d'); // 日付を把握
$loot_date = date('Y-m-d', time() - (5 * 60 * 60)); // 日付を把握: リセットが 5:00の場合
$user_id = Authorization::getUserId();

// DBハンドルを取得する
$dbh = DB::getHandle();

// SELECTしてみて、存在してるかどうか確認：トランは切らなくてよい
$sql = 'SELECT count(*) as cnt FROM daily
         WHERE user_id=:user_id AND loot_date=:loot_date;';
$pre = $dbh->prepare($sql);
// エラー確認
//var_dump($pre);
//var_dump($dbh->errorInfo());
//exit;

//
$pre->bindValue(':user_id', $user_id);
$pre->bindValue(':loot_date', $loot_date);
//
$r = $pre->execute();
$count = $pre->fetch();
//var_dump($count); exit;
if (0 < $count['cnt']) {
    echo 'すでにデイリーがちゃ、引いてますよ';
    return ;
}

// ここからトランザクション開始
$dbh->beginTransaction();

// INSERTしてみて、できるかどうか確認
$sql = 'INSERT INTO daily(user_id, loot_date) VALUES(:user_id, :loot_date);';
$pre = $dbh->prepare($sql);
//
$pre->bindValue(':user_id', $user_id);
$pre->bindValue(':loot_date', $loot_date);
//
$r = $pre->execute();
if (false === $r) {
    $dbh->rollBack(); // トランザクションを巻き戻す
    echo 'すでにデイリーがちゃ、引いてますよ';
    return ;
}
echo 'デイリーがちゃを引きました！！<br><br>';

// がちゃを引く
$card_id = Gacya::getCard( $type );
$card = new Card($card_id);

// 引いたカードをテーブルに保存する
$r = UserCards::save($user_id, $card_id);
// ここでトランザクション終了
if (true === $r) {
    $dbh->commit();
} else {
    $dbh->rollBack();
    echo 'すみませんうまく保存できなかったのでもう一回、引き直してね';
    return ;
}

// 表示
echo 'カード名: ', $card->card_name, '<br>';
echo "<img src='{$card->image_uri}' width=200>";
echo '<br>', $card->card_text, '<br>';
echo $card->attack , '/' , $card->defense;


