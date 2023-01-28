<?php  // sql.php
// http://dev2.m-fr.net/XXXX/sql.php?attack=1000

// DBに接続する
require_once('./db_connect.php');
//var_dump($dbh);

//
$attack = abs((int)@$_GET['attack']); // アバウトにvalidate

/* SELECTでデータを表示する */
// プリペアドステートメント(準備された文)を用意する
$sql = "SELECT * FROM card WHERE attack < :attack ;";
$pre = $dbh->prepare($sql);

//　プレースホルダに値をバインドする
$pre->bindValue(':attack', $attack, \PDO::PARAM_INT);

//　実行する
$res = $pre->execute();

// データの取得
while($row = $pre->fetch(\PDO::FETCH_ASSOC)) {
	echo "{$row['name']}: {$row['attack']}/{$row['defence']} <br>";
}







