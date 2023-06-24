<?php  // sql.php
declare(strict_types=1);

// DBを使うので
require_once('./db.php');
var_dump($dbh);

/* SQLを発行する */
// プリペアドステートメント(準備された文）を作成する
$sql = 'SELECT * FROM users_1 WHERE age = :age ;'; // シングルクォートで１本の文字列
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$age = 20; // 外から入ってきた(と仮定）
$pre->bindValue(':age', $age, \PDO::PARAM_INT);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// SELECTなんでデータを読み込む
// $rows = $pre->fetchAll();
// var_dump($rows);

// バッチとかで「逐次処理をする」ような時用の描き方
while(false !== ($row = $pre->fetch())) {
    var_dump($row);
}
