<?php  // file_upload.php

var_dump($_POST);
var_dump($_FILES);
/*
array(1) {
  ["userfile"]=>
  array(6) {
    ["name"]=>
    string(10) "sample.pdf"
    ["full_path"]=>
    string(10) "sample.pdf"
    ["type"]=>
    string(15) "application/pdf"

    ["tmp_name"]=>
    string(14) "/tmp/phpXdL1YI"
    ["error"]=>
    int(0)
    ["size"]=>
    int(17123)
  }
}
*/

/*　共通の確認事項 */
if (UPLOAD_ERR_OK !== $_FILES["userfile"]["error"]) {
    echo "なんかファイルアップロード失敗しているぽいです";
    exit;
}

/* 画像のアップロード */
/*
// ファイルが「画像かどうか」のチェック
// XXX ["type"]は使っちゃダメ！！！
//　XXX　画像の「フォーマット変換」すると早い、んだけど、画質が劣化しがち
$mime = mime_content_type($_FILES["userfile"]["tmp_name"]);
var_dump($mime);

//　ファイルを保存する
// uuidを使ってファイル名を作成する
//　XXX　["name"]と["full_path"]は使っちゃダメ！！！
$uuid = trim( `uuidgen -r` );
var_dump($uuid);
*/

/*　csvのアップロード　*/
//　中身チェック
//　XXX　やったりやらなかったり？？？
$mime = mime_content_type($_FILES["userfile"]["tmp_name"]);
var_dump($mime);

//　ブン回して中身を処理
$fp = fopen($_FILES["userfile"]["tmp_name"], 'r');
//　読み込む
while(true) {
    $row = fgetcsv($fp);
    if (false === $row) {
        break;
    }
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    //　ここで処理する
    var_dump($row);
}

// ファイルをcloseする
fclose($fp);
