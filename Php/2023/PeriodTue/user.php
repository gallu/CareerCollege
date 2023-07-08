<?php  // user.php

ob_start();

require_once  __DIR__ . "/db.php";

// データを取得
$name = (string) ($_POST["name"] ?? "");
$age = (string) ($_POST["age"] ?? "");
var_dump($name, $age);

// validation
$error = [];
// name 必須、２０文字以内であること
if ('' === $name) {
    $error[] = "nameが未入力です";
} else {
    if (20 < mb_strlen($name)) {
        $error[] = "nameが長すぎます。20文字以内でヨロ";
    }
}
// age 必須、数値であること、０以上であること
if ('' === $age) {
    $error[] = "年齢が未入力です";
} else {
    $age = filter_var($age, FILTER_VALIDATE_INT);
    if (false === $age) {
        $error[] = "年齢は数値で入力してください";
    }
    if (0 > $age) {
        $error[] = "年齢は正の値を入力してください";
    }
}

// エラーがあったら処理中断
if ([] !== $error) {
    var_dump($error);
    exit;
}


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
