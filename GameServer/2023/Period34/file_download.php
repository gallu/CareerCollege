<?php  // file_download.php

// 認証認可とかの処理がある想定

// ダウンロード
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=テスト.pdf");

echo file_get_contents("/tmp/sample.pdf");
