<?php  // user.php

ob_start();

require_once  __DIR__ . "/db.php";

// データを取得
$name = $_POST["name"];
$age = $_POST["age"];
var_dump($name, $age);

// validation



// プリペアドステートメントを作成する
$sql = 'INSERT INTO users_1(name, age, created_at) VALUES(:name, :age, :created_at);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// プレースホルダに値をバインド
$pre->bindValue(":name", $name);
$pre->bindValue(":age", $age);
$pre->bindValue(":created_at", date(DATE_ATOM));

// SQLを実行
$r = $pre->execute();
var_dump($r);

// ありがとさんページに遷移する
header("Location: user_list.php");
