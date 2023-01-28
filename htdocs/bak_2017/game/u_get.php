<?php
// u_get.php
// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");
// uuidを作成
$uuid = strtolower(trim(`uuidgen -r`));
//
$ret = array(
  'status' => 200,
  'uuid' => $uuid,
);
//
echo json_encode($ret);
