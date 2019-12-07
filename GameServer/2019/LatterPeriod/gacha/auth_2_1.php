<?php  // auth_2_1.php
/*
 * user_tokenからsession_idを作成
 */
ob_start();
require_once('./db.php');

// リクエストからuser_tokenを把握
$token = (string)($_GET['token'] ?? '');

// DBに接続
$dbh = get_dbh();
// 該当レコードを取得
$sql = 'SELECT * FROM users WHERE user_token = :user_token;';
$pre = $dbh->prepare($sql);
//var_dump($pre);
// 値をbind
$pre->bindValue(':user_token', $token);
// SQLを実行
$r = $pre->execute();
//var_dump($r);
// レコードを取得
$row = $pre->fetch();
//var_dump($row);

if (false === $row) {
    echo 'NG';
    exit;
}
// ----
$sql = 'INSERT INTO session(user_id, session_id, ttl) VALUES(:user_id, :session_id, :ttl);';
$pre = $dbh->prepare($sql);
//
$session_id = bin2hex(random_bytes(32));
$pre->bindValue(':user_id', $row['user_id']);
$pre->bindValue(':session_id', $session_id);
$pre->bindValue(':ttl', date('Y-m-d H:i:s', time() + 30*60)); // XXX 30分
//
$r = $pre->execute();
//var_dump($r);

//
$json = [];
$json['session_id'] = $session_id;
header('Content-Type: application/json');
echo json_encode($json);






 
 
 