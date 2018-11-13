<?php  // ajax.php

// データ作成
$data = [
    'status' => 200,
    'message' => 'ajax test'
];

// 出力
header('Content-type: application/json');
echo json_encode($data);
