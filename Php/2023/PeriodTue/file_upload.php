<?php  // file_upload.php

// var_dump($_POST);
// var_dump($_FILES);

/*
array(1) {
  ["uf"]=>
  array(6) {
    ["name"]=>
    string(10) "sample.pdf"
    ["full_path"]=>
    string(10) "sample.pdf"
    ["type"]=>
    string(15) "application/pdf"

    ["tmp_name"]=>
    string(14) "/tmp/phpYa6Tot"
    ["error"]=>
    int(0)
    ["size"]=>
    int(17123)
  }
}
*/
// echo file_get_contents($_FILES["uf"]["tmp_name"]);


// アップロードのerrorチェック
if (UPLOAD_ERR_OK !== $_FILES["uf"]["error"]) {
    echo "なんかuploadしっぱいしたぽいよ？";
    exit;
}

/* 画像等のupload */
/*
// XXX 画像フォーマット等を変換する
// mime typeを確認する(ダメな感じならはねる)
$type = mime_content_type($_FILES["uf"]["tmp_name"]);
var_dump($type);

// (OKなので)ファイルの移動
$to_base = "なんか適当なディレクトリ";
$uuid = trim( `uuidgen -r` );
//var_dump($uuid);
$to = "{$to_base}/{$uuid}";
// move_uploaded_file（$_FILES["uf"]["tmp_name"], $to);
*/

// CSVのupload
// mime typeを確認する(ダメな感じならはねる)
// XXX あんまやらないかも……
$type = mime_content_type($_FILES["uf"]["tmp_name"]);
// var_dump($type);

//
$fobj = new SplFileObject($_FILES["uf"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $no => $row) {
    // 最後の空行をはじく
    if ([null] === $row) {
        continue;
    }

    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}


