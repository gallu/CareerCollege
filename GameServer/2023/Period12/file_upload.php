<?php  // file_upload.php

var_dump($_POST);
var_dump($_FILES);
/*
array(1) {
  ["userfile"]=>
  array(6) {
    ["name"]=>
    string(8) "test.png"
    ["full_path"]=>
    string(8) "test.png"
    ["type"]=>
    string(9) "image/png"

    ["tmp_name"]=>
    string(14) "/tmp/php49DW2y"
    ["error"]=>
    int(0)
    ["size"]=>
    int(115559)
  }
}
*/

// アップロードがちゃんとできたか？ の確認
if (UPLOAD_ERR_OK !== $_FILES["userfile"]["error"]) {
    echo "ちゃんとアップロードできなかったよ？";
    exit;
}
// echo file_get_contents($_FILES["userfile"]["tmp_name"]);

/* 画像等のアップ */
/*
// 「本当に画像なのか」の確認
// XXX "type" は信用できないから使っちゃダメ！！！
$mime_type = mime_content_type($_FILES["userfile"]["tmp_name"]);
var_dump($mime_type);

// 保存用のファイル名を作成する
$uuid = trim( `uuidgen -r` );
var_dump($uuid);
*/

/* CSVファイルのアップ */
// CSVだと「やったりやらなかったり」ではあるんだけど
$mime_type = mime_content_type($_FILES["userfile"]["tmp_name"]);
var_dump($mime_type);

// あとは処理していく
$fp = fopen($_FILES["userfile"]["tmp_name"], 'r');
while(true) {
    $row = fgetcsv($fp);
    if (false === $row) {
        break;
    }
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    var_dump($row);
}
//
fclose($fp);
