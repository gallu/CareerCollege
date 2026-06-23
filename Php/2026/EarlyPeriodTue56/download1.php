<?php  // download1.php

$fn = __DIR__ . "/pdf_test.pdf";

// なんかきっと処理があるだろう

// ダウンロード
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=test.pdf");

echo file_get_contents($fn);
