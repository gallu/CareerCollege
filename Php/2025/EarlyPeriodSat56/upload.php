<?php  // upload.php
// var_dump($_FILES);
/*
array(1) {
  ["userfile"]=>
  array(6) {
    // ↓ 使うな！！！
    ["name"]=>     string(7) "sdw.png"
    ["full_path"]=>    string(7) "sdw.png"
    ["type"]=>    string(9) "image/png"
    // ↑ 使うな！！！
    ["tmp_name"]=>    string(27) "/tmp/phpgl92nl9qfp384zmuPL0"
    ["error"]=>    int(0)
    ["size"]=>    int(16709)
  }
}
*/
$tn = $_FILES['userfile']['tmp_name'];
var_dump($tn);

// $csv_string = file_get_contents($tn);
// var_dump($csv_string);

/* 画像ファイルとかのupoloadの場合 */
// ファイルの中身を(ある程度)checkする
$ct = mime_content_type($tn);
var_dump($ct);

// 保存用のファイル名を新しく作る
// $new_filename = $_FILES['userfile']['name']; // XXX nameとfull_pathは「絶対つかっちゃダメ」
// $new_filename = hash('sha-256', $_FILES['userfile']['name']); // XXX ファイル名の重複checkとか面倒なんでやめとけ
$new_filename = rtrim(shell_exec('uuidgen -r')); // 手っ取り早く使える

// 所定の位置にファイルを移動する
// move_uploaded_file($tn, $upload_dir . $new_filename);
exit;

/* CSVファイルの場合 */
$fobj = new SplFileObject($tn);
$fobj->setFlags(SplFileObject::READ_CSV); // ここがミソ
foreach ($fobj as $no => $rows) {
    // (最後の)空行は処理をしない
    if ($rows === [null]) {
        continue;
    }

    $rows = mb_convert_encoding($rows, 'UTF-8', 'SJIS-win');
    // 本来なら「DBにupsert」などの処理が予見される
    echo "{$no}: ";
    foreach ($rows as $r) {
        echo htmlspecialchars($r), ":";
    }
    echo "\n";
}


