<?php

// DBハンドル取得
function db_handle_get() {
  // XXX 後で外だしパラメタ化の可能性を見込む
  $user = 'tech';
  $server = 'localhost';
  $dbname = 'tech';
  $pass = 'tech';
  //
  $dsn = "mysql:dbname={$dbname};host={$server};charset=utf8mb4";
  // オプション：静的プリペアードにする(エミュレートをoffにする
  $option = array(
    PDO::ATTR_EMULATE_PREPARES => false,
  );

  // 接続処理
  try {
    $dbh = new PDO($dsn, $user, $pass, $option);
  } catch (PDOException $e) {
    $dbh = NULL;
  }

  //
  return $dbh;
}


