<?php  // user_register.php
declare(strict_types=1);

ob_start();
require_once  __DIR__ . "/db.php";

// formから情報を取得
$name = (string) ($_POST["name"] ?? "");
$age = (string) ($_POST["age"] ?? "");
var_dump($name, $age);

// validation




// DBにinsert
// プリペアドステートメントを作成
$sql = 'INSERT INTO users_1(name, age, created_at) VALUES(:name, :age, :created_at);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// 値をバインド
$now = date(DATE_ATOM);
$pre->bindValue(":name", $name);
$pre->bindValue(":age", $age);
$pre->bindValue(":created_at", $now);

// SQLを実行
$r = $pre->execute();
var_dump($r);

// 登録ができたら、とっとと別ページに遷移する
header("Location: ./user_list.php");
