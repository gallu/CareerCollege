<?php  // user_add.php
declare(strict_types=1);

ob_start();

require_once __DIR__ . "/db.php";

try {
    // データを取得する
    $name = (string) ($_POST["name"] ?? "");
    $age = (string) ($_POST["age"] ?? "");
var_dump($name, $age);

    // validate




    /* RDBにデータをinsertする */
    //　プリペアドステートメントを作成する
    $sql = 'INSERT INTO users_1(name, age, created_at) VALUES(:name, :age, :created_at);';
    $pre = $dbh->prepare($sql);
var_dump($pre);

    //　値をバインド
    $date_string = date(DATE_ATOM);
    $pre->bindValue(":name", $name, PDO::PARAM_STR);
    $pre->bindValue(":age", $age, PDO::PARAM_INT);
    $pre->bindValue(":created_at", $date_string, PDO::PARAM_STR);

    //　SQLを実行する
    $r = $pre->execute();
var_dump($r);
} catch(PDOException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
    return ;
}

// 一覧ページに遷移させる
header("Location: user_list.php");
