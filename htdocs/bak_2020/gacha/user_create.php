<?php  // user_create.php

require_once('./db.php');
//ob_start('ob_gzhandler');

// 名前を把握
$name = strval($_POST['name'] ?? '');
if ('' === $name) {
    echo '名前入れろ';
    exit;
}
//var_dump($name);

// tokenを作成
$user_token = bin2hex(random_bytes(32));
//var_dump($user_token);

// DBに接続
$dbh = get_dbh();

/* insert */
// プリペアドステートメント作成
$sql = 'INSERT INTO users(user_token, name) VALUES(:user_token, :name)';
$pre = $dbh->prepare($sql);
//var_dump($pre);

// 値をbind
$pre->bindValue(':user_token', $user_token);
$pre->bindValue(':name', $name);

// SQLを実行
$r = $pre->execute();
//var_dump($r);
if (true !== $r) {
    echo '登録失敗 orz';
    exit;
}

// tokenを出力
header('Content-Type: application/json');

$data = ['token' => $user_token];
echo json_encode($data);

//
//ob_end_flush();






