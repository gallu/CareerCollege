<?php  // sql_insert.php
// http://dev2.m-fr.net/XXXX/sql_insert.php

// DBに接続する
require_once('./db_connect.php');
//var_dump($dbh);

// データを用意する
$name = 'ほげら';
$attack = 777;
$defence = 999;
$text = 'なんか詳細なテキストがあるだろうきっと';

/* INSERTでデータを作る */
// プリペアドステートメント(準備された文)を用意する
$sql = 'INSERT card SET
     name = :name, attack = :attack,
	 defence = :defence, text = :text; ';
$pre = $dbh->prepare($sql);

//　プレースホルダに値をバインドする
$pre->bindValue(':name', $name, \PDO::PARAM_STR);
$pre->bindValue(':attack', $attack, \PDO::PARAM_INT);
$pre->bindValue(':defence', $defence, \PDO::PARAM_INT);
$pre->bindValue(':text', $text, \PDO::PARAM_STR);

//　実行する
$res = $pre->execute();
var_dump($res);







