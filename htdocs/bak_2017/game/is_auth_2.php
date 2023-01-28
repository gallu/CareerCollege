<?php
// is_auth_2.php
// 固定のID(UUID)を使った認可

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// UUIDの取得
$uuid = $_SERVER['HTTP_X_AUTH'];
//var_dump($uuid);

// DBの中に「uuid」があるかを判定
// XXXXXX

// あったら「認証できた」
echo json_encode(['status'=> 200]);
