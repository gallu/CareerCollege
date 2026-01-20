<?php  // upload.php

// var_dump($_FILES);
/*
array(1) {
  ["my_file"]=>
  array(6) {
    ["name"]=>
    string(12) "pdf_test.pdf"
    ["full_path"]=>
    string(12) "pdf_test.pdf"
    ["type"]=>
    string(15) "application/pdf"

    ["tmp_name"]=>
    string(27) "/tmp/phpd2d3qk29a41o95JGjdN"
    ["error"]=>
    int(0)
    ["size"]=>
    int(176732)
  }
}
*/
if ($_FILES["my_file"]["error"] !== UPLOAD_ERR_OK) {
    echo "アップロードできなかったぽいよ?";
    exit;
}

$type = mime_content_type($_FILES["my_file"]["tmp_name"]);
var_dump($type);

// XXX ここでcontent-typeのチェックとか行う

// 1. ファイルが画像とかで「保存したい」場合
$fn = trim(shell_exec("uuidgen -r")); // 保存ファイル名
// move_uploaded_file($_FILES["my_file"]["tmp_name"], $fn); // いったんコメントアウト


// 2. ファイルがcsvとかで「データを取り込む」をやりたい場合
$fobj = new SplFileObject($_FILES["my_file"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $k => $v) {
    // 文字コードの変更
    $line_utf8 = mb_convert_encoding($v, 'UTF-8', 'SJIS');
    // var_dump($line_utf8);
    foreach ($line_utf8 as $v) {
        echo htmlspecialchars($v), "<br>\n";
    }
    echo "<br>\n";
}

