<?php // file_upload.php

var_dump($_POST);
var_dump($_FILES);

/*
array(1) {
  ["uf"]=>
  array(6) {
    ["name"]=>
    string(57) "2023年度後期シラバス(古庄)土曜56PHP上級.pdf"
    ["full_path"]=>
    string(57) "2023年度後期シラバス(古庄)土曜56PHP上級.pdf"
    ["type"]=>
    string(15) "application/pdf"

    ["tmp_name"]=>
    string(14) "/tmp/phpSTHc8V"
    ["error"]=>
    int(0)
    ["size"]=>
    int(346265)
  }
}
*/
//echo  file_get_contents($_FILES["uf"]["tmp_name"]);

/* 画像のアップロード */
/*
// uploadのエラー確認
if (UPLOAD_ERR_OK !== $_FILES["uf"]["error"]) {
    echo "なんかuploadエラーだよ！！";
    exit;
}
//　upされたのが「画像であること」の確認
//　XXX 「画像フォーマット変換」をする: 
// or 中身をざっと判定する(　mime_content_type（）　）
// XXX $_FILES["uf"]["type"]は使っちゃダメ！！！！
$content_type = mime_content_type($_FILES["uf"]["tmp_name"]);
var_dump($content_type);

//　移動先のファイル名の決定
//　XXX　name, full_pathは「使っちゃだめ」！！！！！！
$uuid = trim( `uuidgen  -r` );
var_dump($uuid);
*/

/* csvのアップロード */
// uploadのエラー確認
if (UPLOAD_ERR_OK !== $_FILES["uf"]["error"]) {
    echo "なんかuploadエラーだよ！！";
    exit;
}

//　upされたのが「csvであること」の確認
// XXX そんなにやらないことが多い
$content_type = mime_content_type($_FILES["uf"]["tmp_name"]);
var_dump($content_type);
if ("text/csv" !== $content_type) {
    echo "csvじゃないよ！！";
    exit;
}

// 読み込んで
$fobj = new SplFileObject($_FILES["uf"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV);
// var_dump($fobj);
//　処理！！
foreach ($fobj as $no => $row) {
    // 「最後の空行」用
    if ([null] === $row) {
        continue;
    }
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}
