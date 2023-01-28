<?php  // insert_select.php
//  http://dev2.m-fr.net/XXXXX/insert_select.php

// DBに接続
require_once('./pdo.php');
var_dump($dbh);

/*
CREATE TABLE test_table (
  test_table_id SERIAL,
  num int,
  s varchar(64),
  d DATETIME,
  PRIMARY KEY(test_table_id)
);
*/

/* INSERT */
// 値の準備
$num = 999;
$s = "' OR 1=1;--";
$d = date('Y-m-d H:i:s');

// プリペアドステートメント(準備された文)を作成する
// $sql = "INSERT INTO test_table(num, s, d) VALUES({$num}, '{$s}', '{$d}');"; // XXX 駄目！！絶対！！
$sql = 'INSERT INTO test_table(num, s, d) VALUES(:num, :s, :d);';
var_dump($sql);
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':num', $num);
$pre->bindValue(':s', $s);
$pre->bindValue(':d', $d);

// SQLを実行する
$r = $pre->execute();
var_dump($r);

/* SELECT */
// プリペアドステートメント(準備された文)を作成する
$sql = 'SELECT * FROM test_table ORDER BY num;';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインドする
// XXX プレースホルダがないのでバインドもなし

// SQLを実行する
$r = $pre->execute();
var_dump($r);

// データを取得する
$data = $pre->fetchAll( PDO::FETCH_ASSOC );
var_dump($data);

