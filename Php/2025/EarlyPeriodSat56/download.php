<?php  // download.php

/* ここで多分、認可とかアンケートとかなんかやってるんだと仮定 */

// ヘッダの出力
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="down.xlsx"');

// ファイルの出力
echo file_get_contents(__DIR__ . '/test.xlsx');
