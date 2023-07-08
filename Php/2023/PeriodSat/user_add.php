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
    $validation_error = [];
    // name　「空でないこと」「２０文字以内であること」
    if ("" === $name) {
        $validation_error[] = "名前が未入力です";
    }
    if (20 < mb_strlen($name)) {
        $validation_error[] = "名前は２０文字以内でお願いします";
    }
    // age 「空でないこと」「数字であること」「負の値ではないこと」
    if ("" === $age) {
        $validation_error[] = "年齢が未入力です";
    }
    $age = filter_var($age, FILTER_VALIDATE_INT);
    if (false === $age) {
        $validation_error[] = "年齢には数字を入力してください";
    }
    if (0 > $age) {
        $validation_error[] = "年齢には正の値を入力してください";
    }
    // エラーがあったら処理を止める
    if ([] !== $validation_error) {
        var_dump($validation_error);
        return ;
    }

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
